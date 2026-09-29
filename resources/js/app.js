const menuButton = document.querySelector('.menu-toggle');
const mobileNav = document.querySelector('.mobile-nav');

menuButton?.addEventListener('click', () => {
    const isOpen = mobileNav.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(isOpen));
    mobileNav.setAttribute('aria-hidden', String(!isOpen));
});

mobileNav?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        mobileNav.classList.remove('open');
        menuButton?.setAttribute('aria-expanded', 'false');
        mobileNav.setAttribute('aria-hidden', 'true');
    });
});

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));

const tabContent = {
    sales: {
        kicker: 'Sales & customer management',
        title: 'Turn every opportunity into revenue.',
        description: 'Move from quotation to order, delivery, invoice and collection in one seamless workflow. Give every team member the context to serve customers better.',
        bullets: ['Fast POS and sales invoicing', 'Quotations, orders and challans', 'Customer profiles and ledgers', 'Targets, territories and commissions'],
    },
    inventory: {
        kicker: 'Inventory & procurement',
        title: 'The right stock, in the right place.',
        description: 'Know exactly what is available across every outlet and warehouse. Purchase confidently, transfer cleanly and prevent stock-outs before they cost sales.',
        bullets: ['Live multi-location stock', 'Purchase and receiving workflows', 'Units, batches and barcodes', 'Transfers and reorder intelligence'],
    },
    finance: {
        kicker: 'Finance & accounting',
        title: 'Every taka accounted for.',
        description: 'Connect cash, bank, sales, expenses, receivables and payables to a reliable accounting foundation with audit-ready transaction history.',
        bullets: ['Cash and bank management', 'Double-entry accounting', 'Customer and supplier ledgers', 'Expenses, vouchers and statements'],
    },
    people: {
        kicker: 'HR, payroll & attendance',
        title: 'Help your people do their best work.',
        description: 'Bring employee records, shifts, biometric attendance, leave and salary processing into one clear and dependable workflow.',
        bullets: ['Employee lifecycle records', 'Biometric and mobile attendance', 'Leave and shift management', 'Payroll and salary processing'],
    },
    reports: {
        kicker: 'Reports & intelligence',
        title: 'Answers, before questions become problems.',
        description: 'See the numbers that matter without waiting for manual reports. Track performance, profitability, cash and stock from one live source.',
        bullets: ['Business performance dashboard', 'Profit and sales analysis', 'Stock and inventory ledgers', 'Bank and contact statements'],
    },
};

document.querySelectorAll('.module-tabs button').forEach((button) => {
    button.addEventListener('click', () => {
        const content = tabContent[button.dataset.tab];
        if (!content) return;
        document.querySelectorAll('.module-tabs button').forEach((tab) => tab.classList.remove('active'));
        button.classList.add('active');
        const feature = document.querySelector('.feature-copy');
        feature.querySelector('.kicker').textContent = content.kicker;
        feature.querySelector('h3').textContent = content.title;
        feature.querySelector('p').textContent = content.description;
        feature.querySelector('ul').innerHTML = content.bullets.map((bullet) => `<li>${bullet}</li>`).join('');
    });
});

const assistant = document.querySelector('.product-assistant');
const assistantToggle = assistant?.querySelector('.assistant-toggle');
const assistantPanel = assistant?.querySelector('.assistant-panel');
const assistantClose = assistant?.querySelector('.assistant-close');
const assistantIntro = assistant?.querySelector('.assistant-intro');
const assistantStartForm = assistant?.querySelector('.assistant-start-form');
const assistantChat = assistant?.querySelector('.assistant-chat');
const assistantForm = assistant?.querySelector('.assistant-form');
const assistantMessages = assistant?.querySelector('.assistant-messages');
let assistantConversationToken = '';

const appendAssistantMessage = (text, role = 'bot') => {
    const message = document.createElement('div');
    message.className = `assistant-message assistant-message--${role}`;
    message.textContent = text;
    assistantMessages?.appendChild(message);
    assistantMessages?.scrollTo({ top: assistantMessages.scrollHeight, behavior: 'smooth' });
    return message;
};

assistantToggle?.addEventListener('click', () => {
    const open = !assistantPanel.hidden;
    assistantPanel.hidden = open;
    assistantToggle.setAttribute('aria-expanded', String(!open));
});

assistantClose?.addEventListener('click', () => {
    assistantPanel.hidden = true;
    assistantToggle?.setAttribute('aria-expanded', 'false');
});

assistantStartForm?.addEventListener('submit', async (event) => {
    event.preventDefault();
    const submit = assistantStartForm.querySelector('button');
    submit.disabled = true;
    const formData = Object.fromEntries(new FormData(assistantStartForm).entries());
    try {
        const response = await fetch(assistantStartForm.dataset.endpoint, {
            method: 'POST', headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '' }, body: JSON.stringify(formData),
        });
        const data = await response.json();
        if (!response.ok) throw new Error(data.message || 'Please check your details.');
        assistantConversationToken = data.conversation_token;
        assistantIntro.hidden = true;
        assistantChat.hidden = false;
        assistantChat.querySelector('input[name="message"]')?.focus();
    } catch (error) {
        alert(error.message || 'Unable to start conversation.');
    } finally { submit.disabled = false; }
});

assistantForm?.addEventListener('submit', async (event) => {
    event.preventDefault();
    const input = assistantForm.querySelector('input');
    const submit = assistantForm.querySelector('button');
    const message = input.value.trim();
    if (!message) return;
    appendAssistantMessage(message, 'user');
    input.value = '';
    input.disabled = true;
    submit.disabled = true;
    const pending = appendAssistantMessage('Thinking…');
    try {
        const response = await fetch(assistantForm.dataset.endpoint, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '' },
            body: JSON.stringify({ message, conversation_token: assistantConversationToken }),
        });
        const data = await response.json();
        pending.remove();
        appendAssistantMessage(response.ok ? data.answer : (data.message || 'Please try again later.'));
    } catch {
        pending.remove();
        appendAssistantMessage('I could not connect right now. Please email contact@bizzsmart.xyz or call/WhatsApp +88 01976729816.');
    } finally {
        input.disabled = false;
        submit.disabled = false;
        input.focus();
    }
});
