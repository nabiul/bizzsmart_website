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
