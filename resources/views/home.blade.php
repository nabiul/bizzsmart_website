<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BizzSmart ERP connects sales, inventory, finance, payroll, customers and field teams in one powerful business platform.">
    <meta name="theme-color" content="#071229">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/bizzsmart-logo.svg') }}">
    <title>BizzSmart ERP — Run your entire business smarter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="site-shell">
        <header class="site-header" id="top">
            <div class="container nav-wrap">
                <a class="brand" href="#top" aria-label="BizzSmart home">
                    <img class="brand-logo" src="{{ asset('images/bizzsmart-logo.svg') }}" alt="">
                    <span>Bizz<span>Smart</span></span>
                </a>
                <nav class="desktop-nav" aria-label="Main navigation">
                    <a href="#platform">Platform</a>
                    <a href="#features">Features</a>
                    <a href="#solutions">Solutions</a>
                    <a href="#mobile">Mobile</a>
                    <a href="#why-us">Why BizzSmart</a>
                </nav>
                <div class="nav-actions">
                    <a class="nav-link" href="#contact">Talk to sales</a>
                    <a class="btn btn-sm btn-light" href="#contact">Book a demo <span>↗</span></a>
                </div>
                <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false"><i></i><i></i></button>
            </div>
            <div class="mobile-nav" aria-hidden="true">
                <a href="#platform">Platform</a><a href="#features">Features</a><a href="#solutions">Solutions</a><a href="#mobile">Mobile</a><a href="#why-us">Why BizzSmart</a><a href="#contact">Book a demo</a>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="hero-art" aria-hidden="true"></div>
                <div class="hero-grid" aria-hidden="true"></div>
                <div class="container hero-inner">
                    <div class="hero-copy reveal">
                        <div class="eyebrow"><span></span> Built for ambitious businesses</div>
                        <h1>Every part of your business. <em>Finally in sync.</em></h1>
                        <p>BizzSmart unifies sales, inventory, finance, payroll, customers and field teams—so you can make faster decisions and grow with control.</p>
                        <div class="hero-actions">
                            <a class="btn btn-primary" href="#contact">See BizzSmart in action <span>→</span></a>
                            <a class="text-link" href="#platform"><i class="play">▶</i> Explore the platform</a>
                        </div>
                        <div class="hero-proof">
                            <div class="avatars"><span>MK</span><span>AS</span><span>RH</span><span>+99</span></div>
                            <div><div class="stars">★★★★★</div><small>Trusted by growing teams</small></div>
                        </div>
                    </div>

                    <div class="dashboard-wrap reveal delay-1" aria-label="BizzSmart dashboard preview">
                        <div class="dashboard">
                            <div class="dash-sidebar">
                                <div class="dash-logo"><img class="brand-logo mini" src="{{ asset('images/bizzsmart-logo.svg') }}" alt=""></div>
                                <span class="active">⌂</span><span>▦</span><span>↗</span><span>◫</span><span>◎</span><span>⚙</span>
                            </div>
                            <div class="dash-main">
                                <div class="dash-top"><div><small>Overview</small><strong>Good morning, Arif</strong></div><div class="dash-user">⌕ &nbsp; 🔔 &nbsp; <b>AH</b></div></div>
                                <div class="dash-cards">
                                    <div><small>Total sales</small><strong>৳ 12.48M</strong><span class="up">↗ 18.4%</span></div>
                                    <div><small>Receivable</small><strong>৳ 2.36M</strong><span>128 invoices</span></div>
                                    <div><small>Net profit</small><strong>৳ 3.14M</strong><span class="up">↗ 12.7%</span></div>
                                </div>
                                <div class="dash-panels">
                                    <div class="chart-card">
                                        <div class="card-head"><div><small>Revenue overview</small><strong>৳ 8,42,500</strong></div><span>Last 7 days⌄</span></div>
                                        <svg viewBox="0 0 460 150" role="img" aria-label="Revenue rising chart"><defs><linearGradient id="fill" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#4f6bff" stop-opacity=".32"/><stop offset="1" stop-color="#4f6bff" stop-opacity="0"/></linearGradient></defs><path d="M0 126 C45 115,54 68,94 82 S151 118,186 91 S236 42,270 62 S321 101,352 64 S413 20,460 34 L460 150 L0 150Z" fill="url(#fill)"/><path d="M0 126 C45 115,54 68,94 82 S151 118,186 91 S236 42,270 62 S321 101,352 64 S413 20,460 34" fill="none" stroke="#6681ff" stroke-width="4" stroke-linecap="round"/><circle cx="352" cy="64" r="6" fill="#fff" stroke="#6681ff" stroke-width="4"/></svg>
                                        <div class="chart-labels"><span>Sat</span><span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span></div>
                                    </div>
                                    <div class="stock-card"><div class="card-head"><div><small>Inventory health</small><strong>1,248 items</strong></div><span>•••</span></div><div class="donut"><span>84%<small>Healthy</small></span></div><ul><li><i></i>In stock <b>1,048</b></li><li><i></i>Low stock <b>142</b></li><li><i></i>Out of stock <b>58</b></li></ul></div>
                                </div>
                                <div class="activity"><div><i class="success">✓</i><span><b>Payment received</b><small>Rahman Traders · 2m ago</small></span><strong>+ ৳ 42,500</strong></div><div><i>▣</i><span><b>New order #BS-2841</b><small>Dhaka outlet · 8m ago</small></span><strong>৳ 18,750</strong></div></div>
                            </div>
                        </div>
                        <div class="float-card float-one"><i>✓</i><span><b>Sale completed</b><small>Invoice #BS-2841</small></span></div>
                        <div class="float-card float-two"><span class="pulse"></span><span><b>All locations live</b><small>Real-time sync</small></span></div>
                    </div>
                </div>
                <div class="container trust-row"><span>One connected platform for</span><b>RETAIL</b><b>DISTRIBUTION</b><b>WHOLESALE</b><b>MANUFACTURING</b><b>SERVICES</b></div>
            </section>

            <section class="section outcomes" id="why-us">
                <div class="container">
                    <div class="section-heading centered reveal"><div class="kicker">From complexity to clarity</div><h2>Know what’s happening.<br><span>Decide what happens next.</span></h2><p>Replace scattered spreadsheets and disconnected tools with one accurate, real-time view of your operation.</p></div>
                    <div class="outcome-grid">
                        <article class="outcome-card dark reveal"><span class="card-number">01</span><div class="icon-box">⌁</div><h3>See the full picture</h3><p>Live dashboards turn every sale, stock movement, payment and expense into useful business intelligence.</p><div class="mini-report"><div><span>Business performance</span><b>+24.8%</b></div><div class="bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div></div></article>
                        <article class="outcome-card reveal delay-1"><span class="card-number">02</span><div class="icon-box blue">⌘</div><h3>Control every operation</h3><p>Standardize workflows, permissions and approvals across branches without slowing your people down.</p><div class="flow"><span>Order <b>✓</b></span><i>→</i><span>Stock <b>✓</b></span><i>→</i><span>Accounts <b>✓</b></span></div></article>
                        <article class="outcome-card reveal delay-2"><span class="card-number">03</span><div class="icon-box coral">↗</div><h3>Grow without the chaos</h3><p>Add teams, locations and transaction volume while your data and processes stay beautifully organized.</p><div class="growth"><strong>3.2×</strong><span>Faster reporting</span><svg viewBox="0 0 240 50"><path d="M0 42 C32 43 39 29 69 33 S103 37 123 22 S166 30 184 13 S217 15 240 3" fill="none" stroke="#ff7b68" stroke-width="3"/></svg></div></article>
                    </div>
                </div>
            </section>

            <section class="section platform" id="platform">
                <div class="container">
                    <div class="section-heading reveal"><div class="kicker light">Everything works together</div><h2>One platform.<br><span>Every business function.</span></h2><p>Purpose-built modules share the same data, so your entire organization operates from one version of the truth.</p></div>
                    <div class="module-tabs" role="tablist">
                        <button class="active" data-tab="sales">Sales & CRM</button><button data-tab="inventory">Inventory</button><button data-tab="finance">Finance</button><button data-tab="people">HR & Payroll</button><button data-tab="reports">Reports</button>
                    </div>
                    <div class="feature-stage reveal">
                        <div class="feature-copy">
                            <div class="feature-icon">↗</div><div class="kicker light">Sales & customer management</div><h3>Turn every opportunity into revenue.</h3><p>Move from quotation to order, delivery, invoice and collection in one seamless workflow. Give every team member the context to serve customers better.</p>
                            <ul><li>Fast POS and sales invoicing</li><li>Quotations, orders and challans</li><li>Customer profiles and ledgers</li><li>Targets, territories and commissions</li></ul>
                            <a href="#contact">Explore sales features <span>→</span></a>
                        </div>
                        <div class="feature-visual">
                            <div class="pipeline"><div class="pipe-top"><div><small>Sales pipeline</small><b>৳ 4.8M</b></div><span>This month⌄</span></div><div class="pipe-cols"><div><small>NEW LEADS <b>8</b></small><article><i class="avatar a">AN</i><span><b>Akij Distribution</b><small>৳ 280,000</small></span></article><article><i class="avatar b">NR</i><span><b>Nova Retail</b><small>৳ 125,000</small></span></article></div><div><small>PROPOSAL <b>5</b></small><article><i class="avatar c">MT</i><span><b>Metro Traders</b><small>৳ 540,000</small></span></article><article><i class="avatar d">SB</i><span><b>Shapla Bazaar</b><small>৳ 310,000</small></span></article></div><div><small>WON <b>12</b></small><article class="won"><i class="avatar e">FR</i><span><b>Fresh Retail</b><small>৳ 680,000</small></span></article><article class="won"><i class="avatar f">CP</i><span><b>City Point</b><small>৳ 215,000</small></span></article></div></div></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section capabilities" id="features">
                <div class="container">
                    <div class="section-heading split reveal"><div><div class="kicker">The complete feature map</div><h2>Deep enough for<br><span>today. Flexible for tomorrow.</span></h2></div><p>Start with the workflows your team needs now, then unlock more capability as your business grows. Every module shares the same clean data foundation.</p></div>
                    <div class="capability-intro reveal"><div class="capability-count"><strong>24</strong><span>connected<br>capability areas</span></div><div><h3>One system. No loose ends.</h3><p>From first contact to final report, BizzSmart gives each team a clear place to work and leadership a clear view of what is happening.</p></div><a class="btn btn-light" href="#contact">Find your modules <span>→</span></a></div>
                    @php
                        $featureModules = [
                            ['01', 'Lead management', 'Turn prospects into a visible, measurable pipeline.', '↗', ['Lead scoring and qualification', 'Nurture and follow-up history', 'Conversion tracking', 'Pipeline visualization'], 'indigo'],
                            ['02', 'Projects & billing', 'Coordinate work, resources and recurring invoices.', '⌁', ['Project milestones and tasks', 'Resource allocation', 'Time and budget tracking', 'Bulk invoice generation'], 'coral'],
                            ['03', 'Contacts & investors', 'Keep every relationship and investment in context.', '◎', ['Customer and supplier database', 'Grouping and segmentation', 'Investor profiles and records', 'Returns and communication history'], 'blue'],
                            ['04', 'Product catalog', 'Model products exactly as your business sells them.', '▦', ['Item categorization', 'Individual items and bundles', 'Multi-unit support', 'Pricing-ready product records'], 'cyan'],
                            ['05', 'Warehouses & assets', 'Know what you have, where it is and what needs attention.', '◫', ['Multiple godown locations', 'Stock transfers and damage entries', 'Asset tagging and depreciation', 'Maintenance scheduling'], 'green'],
                            ['06', 'Spare parts', 'Control parts inventory from purchase to usage.', '⚙', ['Parts inventory and categories', 'Usage tracking', 'Reorder management', 'Location-aware stock levels'], 'amber'],
                            ['07', 'Purchase management', 'Move every purchase from request to return.', '৳', ['Purchase orders and invoices', 'Supplier management', 'Purchase returns', 'Approval-ready procurement'], 'indigo'],
                            ['08', 'Sales & POS', 'Sell faster with a complete order-to-collection workflow.', '↗', ['Quotations and sales orders', 'Sales invoicing and returns', 'Due entry management', 'POS-ready transactions'], 'coral'],
                            ['09', 'Procurement controls', 'Make buying decisions with structure and visibility.', '⌘', ['Procurement requests', 'Vendor comparison', 'Approval workflows', 'Purchase planning'], 'cyan'],
                            ['10', 'Commercial extras', 'Handle the details that make your model unique.', '✦', ['EMI and installment management', 'Subsidy billing', 'Sales commission tracking', 'After-sale services'], 'violet'],
                            ['11', 'Production planning', 'Plan batches, materials and resources with confidence.', '▤', ['Batch templates and BOM', 'Production scheduling', 'Resource allocation', 'Material consumption'], 'amber'],
                            ['12', 'Batch & quality', 'Track output, quality and cost from start to finish.', '◒', ['Batch monitoring', 'Quality control', 'Yield tracking', 'Labor and batch expenses'], 'green'],
                            ['13', 'Filling stations', 'Run pumps, shifts and tank operations in one view.', '◉', ['Shift and tank monitoring', 'Machine, pump and nozzle tracking', 'Credit sale bills', 'Shift cart reconciliation'], 'indigo'],
                            ['14', 'Restaurant operations', 'Connect tables, kitchen and billing without friction.', '⌁', ['Table management', 'Order taking', 'Kitchen display system', 'Bill generation'], 'coral'],
                            ['15', 'Party & transport', 'Control third-party stock and your moving fleet.', '◇', ['Party stock-in and stock-out', 'Party batch management', 'Vehicle and driver tracking', 'Trips, due vouchers and profitability'], 'cyan'],
                            ['16', 'Employee management', 'Build a dependable employee and department foundation.', '◫', ['Departments and designations', 'Employee profiles', 'Biometric device integration', 'Document and expiry tracking'], 'blue'],
                            ['17', 'Shifts & attendance', 'Make time, rosters and field work accountable.', '◷', ['Shift scheduling and rosters', 'Duty allocation and overtime', 'Attendance and leave tracking', 'Holidays and hourly penalties'], 'violet'],
                            ['18', 'Salary & payroll', 'Process salary accurately, at scale.', '৳', ['Salary grades and monthly payroll', 'Hourly salary calculation', 'Advances, bonuses and payments', 'Bulk data entry and history'], 'green'],
                            ['19', 'Performance work', 'Reward output with work-based salary intelligence.', '↗', ['Work types, styles and definitions', 'Pricing matrix', 'Work transactions', 'Performance-based salary'], 'coral'],
                            ['20', 'Core HR', 'Support people through every stage of their journey.', '✦', ['Promotions and transfers', 'Training programs and types', 'Warnings and termination', 'Awards and employee relations'], 'amber'],
                            ['21', 'Bank & cash', 'Bring every taka, account and approval into one ledger.', '⌘', ['Multiple bank accounts', 'Reconciliation and statements', 'Deposits, withdrawals and transfers', 'Purpose categorization'], 'green'],
                            ['22', 'Double-entry accounting', 'Make financial reporting trustworthy from the journal up.', '≡', ['Chart of accounts and sub-accounts', 'Manual and automated journals', 'Entry reversal and audit trail', 'Trial balance, P&L and balance sheet'], 'indigo'],
                            ['23', 'Reports & intelligence', 'Turn daily activity into decisions your team can act on.', '◒', ['Sales, purchase and contact ledgers', 'Inventory movement and valuation', 'Bank, deposit and withdrawal reports', 'DSR closeout and detailed reports'], 'cyan'],
                            ['24', 'Admin & communication', 'Protect access and keep every team informed.', '⚙', ['Roles and granular permissions', 'Support tickets and resolution tracking', 'Locations and license settings', 'SMS, bulk messaging and notifications'], 'amber'],
                        ];
                    @endphp
                    <div class="capability-grid">
                        @foreach($featureModules as $index => $module)
                            <article class="capability-card reveal {{ $index % 3 === 1 ? 'delay-1' : ($index % 3 === 2 ? 'delay-2' : '') }}"><div class="capability-top"><span class="capability-index">{{ $module[0] }}</span><span class="capability-icon {{ $module[5] }}">{{ $module[3] }}</span></div><h3>{{ $module[1] }}</h3><p>{{ $module[2] }}</p><ul>@foreach($module[4] as $feature)<li>{{ $feature }}</li>@endforeach</ul><a href="#contact">Talk through this module <span>→</span></a></article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="section solutions" id="solutions">
                <div class="container">
                    <div class="section-heading split reveal"><div><div class="kicker">Powerful by design</div><h2>Built for the way<br><span>your business really runs.</span></h2></div><p>From the counter to the warehouse, head office to the field—BizzSmart keeps every role moving in the same direction.</p></div>
                    <div class="solution-grid">
                        @php
                            $modules = [
                                ['▤','Sales & POS','Fast billing, quotations, orders, returns, challans and customer credit—all connected to stock and accounts.','coral'],
                                ['▦','Inventory & Purchase','Multi-location stock, transfers, batches, units, reorder intelligence and supplier purchasing.','blue'],
                                ['৳','Finance & Accounts','Cash, bank, expenses, receivables, payables, vouchers and double-entry accounting with complete ledgers.','green'],
                                ['◎','HR, Payroll & Attendance','Employee records, shifts, biometric attendance, leave, salary processing and ID cards.','violet'],
                                ['⌖','Field Team Management','Mobile attendance, GPS location, route activity and field transactions for teams on the move.','amber'],
                                ['↗','Reports & Intelligence','Live performance, profit, stock, tax, bank and contact reports that turn transactions into decisions.','cyan'],
                            ];
                        @endphp
                        @foreach($modules as $i => $module)
                            <article class="solution-card reveal {{ $i % 3 === 1 ? 'delay-1' : ($i % 3 === 2 ? 'delay-2' : '') }}"><div class="solution-icon {{ $module[3] }}">{{ $module[0] }}</div><h3>{{ $module[1] }}</h3><p>{{ $module[2] }}</p><a href="#contact" aria-label="Learn more about {{ $module[1] }}">Learn more <span>→</span></a></article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="section mobile-section" id="mobile">
                <div class="container mobile-grid">
                    <div class="phone-scene reveal">
                        <div class="orb"></div>
                        <div class="phone phone-back"><div class="phone-screen"><div class="mobile-top"><span>9:41</span><span>● ◒</span></div><div class="app-title"><b>BizzSmart</b><i>AH</i></div><small>Good morning, Arif</small><h4>Business overview</h4><div class="mobile-stat"><span>Today's sales</span><b>৳ 84,250</b><em>+12.4%</em></div><div class="mobile-mini"><div><span>Orders</span><b>48</b></div><div><span>Collection</span><b>৳62k</b></div></div><div class="mobile-chart"><span>Weekly sales</span><svg viewBox="0 0 240 70"><path d="M0 62 C25 61 30 40 55 46 S85 55 106 31 S144 45 162 24 S199 27 240 5" fill="none" stroke="#6d7fff" stroke-width="4"/></svg></div></div></div>
                        <div class="phone phone-front"><div class="phone-screen light"><div class="mobile-top"><span>9:41</span><span>● ◒</span></div><div class="app-title"><b>New Sale</b><i>×</i></div><label>Customer</label><div class="input-mock">Rahman Traders <span>⌄</span></div><label>Items</label><div class="item-row"><i>▣</i><span><b>Premium Product</b><small>2 × ৳ 1,250</small></span><strong>৳2,500</strong></div><div class="item-row"><i>▦</i><span><b>Standard Product</b><small>1 × ৳ 850</small></span><strong>৳850</strong></div><div class="total"><span>Total</span><b>৳ 3,350</b></div><button>Complete sale</button></div></div>
                        <div class="gps-badge"><i>⌖</i><span><b>Field team live</b><small>12 reps active</small></span></div>
                    </div>
                    <div class="mobile-copy reveal delay-1"><div class="kicker light">Business in your pocket</div><h2>Stay connected.<br><span>Wherever work happens.</span></h2><p>Give owners, managers and field teams the power to act from anywhere—without losing security or control.</p><ul><li><i>✓</i><span><b>Real-time dashboard</b><small>Track sales, collections and operations at a glance.</small></span></li><li><i>✓</i><span><b>Sales and finance on the go</b><small>Create sales, deposits, withdrawals and transfers securely.</small></span></li><li><i>✓</i><span><b>Attendance with GPS</b><small>Keep field teams accountable with mobile attendance and location history.</small></span></li></ul><div class="store-row"><a href="#contact"><span>Available on</span><b>Google Play</b></a><a href="#contact"><span>Web & mobile</span><b>Always in sync</b></a></div></div>
                </div>
            </section>

            <section class="section difference">
                <div class="container">
                    <div class="section-heading centered reveal"><div class="kicker">The BizzSmart difference</div><h2>Enterprise control.<br><span>Without enterprise complexity.</span></h2></div>
                    <div class="difference-grid reveal"><article><strong>01</strong><div><h3>Built around your business</h3><p>Flexible settings, document formats and workflows adapt to how your team already operates.</p></div></article><article><strong>02</strong><div><h3>Secure access by role</h3><p>Granular permissions keep every employee focused on exactly the tools and data they need.</p></div></article><article><strong>03</strong><div><h3>Ready for every location</h3><p>Run branches, warehouses and teams from a shared system with location-aware access.</p></div></article><article><strong>04</strong><div><h3>Local expertise, real support</h3><p>Work with a team that understands growing businesses and stays close after implementation.</p></div></article></div>
                </div>
            </section>

            <section class="cta-section" id="contact">
                <div class="container cta-grid">
                    <div class="cta-copy reveal"><div class="kicker light">Let’s build a smarter business</div><h2>Your next stage of growth starts with <span>clarity.</span></h2><p>Tell us a little about your operation. We’ll show you exactly how BizzSmart can bring your sales, stock, finance and people together.</p><div class="cta-points"><span><i>✓</i> Personalized product walkthrough</span><span><i>✓</i> No obligation, no generic sales pitch</span><span><i>✓</i> Practical answers from an ERP specialist</span></div><div class="direct-contact"><a href="mailto:contact@bizzsmart.xyz"><small>Email us</small><strong>contact@bizzsmart.xyz</strong></a><a href="https://wa.me/8801976729816" target="_blank" rel="noopener"><small>WhatsApp</small><strong>+88 01976729816</strong></a></div></div>
                    <div class="contact-card reveal delay-1">
                        @if(session('success'))<div class="success-message">✓ {{ session('success') }}</div>@endif
                        @if($errors->any())<div class="error-message">Please review the highlighted fields and try again.</div>@endif
                        <div class="form-head"><div><small>BOOK YOUR FREE DEMO</small><h3>See BizzSmart in action</h3></div><span>↗</span></div>
                        <form method="POST" action="{{ route('demo.store') }}">@csrf
                            <div class="form-grid"><label><span>Your name *</span><input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Arif Hasan" required></label><label><span>Company name *</span><input type="text" name="company" value="{{ old('company') }}" placeholder="Your business name" required></label></div>
                            <div class="form-grid"><label><span>Phone number *</span><input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+880 1XXX XXXXXX" required></label><label><span>Work email</span><input type="email" name="email" value="{{ old('email') }}" placeholder="you@company.com"></label></div>
                            <div class="form-grid"><label><span>Business type</span><select name="business_type"><option value="">Select industry</option><option>Retail</option><option>Distribution</option><option>Wholesale</option><option>Manufacturing</option><option>Services</option><option>Other</option></select></label><label><span>Team size</span><select name="team_size"><option value="">Select size</option><option>1–10</option><option>11–50</option><option>51–200</option><option>201+</option></select></label></div>
                            <label><span>What would you like to improve?</span><textarea name="message" rows="3" placeholder="Tell us about your current challenges...">{{ old('message') }}</textarea></label>
                            <button class="btn btn-primary form-submit" type="submit">Request my free demo <span>→</span></button><p class="privacy-note">By submitting, you agree to be contacted about BizzSmart. We respect your privacy.</p>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container footer-main"><div class="footer-brand"><a class="brand" href="#top"><img class="brand-logo" src="{{ asset('images/bizzsmart-logo.svg') }}" alt=""><span>Bizz<span>Smart</span></span></a><p>The connected business platform built to help ambitious companies operate with clarity and grow with confidence.</p></div><div><h4>Platform</h4><a href="#platform">Sales & CRM</a><a href="#platform">Inventory</a><a href="#platform">Finance</a><a href="#platform">HR & Payroll</a></div><div><h4>Solutions</h4><a href="#solutions">Retail</a><a href="#solutions">Distribution</a><a href="#solutions">Wholesale</a><a href="#solutions">Field teams</a></div><div><h4>Get started</h4><a href="#contact">Book a demo</a><a href="#contact">Talk to sales</a><a href="#mobile">Mobile app</a><a href="mailto:contact@bizzsmart.xyz">contact@bizzsmart.xyz</a><a href="https://wa.me/8801976729816" target="_blank" rel="noopener">WhatsApp: +88 01976729816</a></div></div>
            <div class="container footer-bottom"><span>© {{ date('Y') }} BizzSmart. All rights reserved.</span><span>Made for businesses ready to grow.</span></div>
        </footer>
    </div>
</body>
</html>
