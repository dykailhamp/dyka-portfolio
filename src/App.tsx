import { useState, type ReactNode } from "react";
import {
    BrowserRouter,
    Link,
    Route,
    Routes,
    useLocation,
    useNavigate,
    useParams,
} from "react-router-dom";
import {
    ArrowDownRight,
    ArrowLeft,
    ArrowUpRight,
    BriefcaseBusiness,
    Check,
    Globe2,
    Menu,
    Sigma,
    X,
} from "lucide-react";
import "../resources/css/app.css";

const WHATSAPP = "https://wa.me/6281234567890";

type Project = {
    slug: string;
    title: string;
    eyebrow: string;
    description: string;
    role: string;
    timeline: string;
    tags: string[];
    color: string;
    image: string;
    overview: string;
    problem: string;
    result: string;
};
const projects: Project[] = [
    {
        slug: "genpro-apps",
        title: "Genpro Apps",
        eyebrow: "Mobile app",
        description:
            "A focused finance companion that helps young professionals build better money habits.",
        role: "UI/UX Designer",
        timeline: "8 weeks",
        tags: ["Research", "Product design"],
        color: "yellow",
        image: "https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=1000&q=85",
        overview:
            "Genpro is a mobile experience for young professionals who want clarity over their everyday finances without feeling overwhelmed by spreadsheets.",
        problem:
            "Most personal finance apps make people feel like they are already behind. The challenge was to turn a complex set of financial actions into a friendly, motivating daily ritual.",
        result: "A calmer dashboard and goal-first flow made the product easier to understand at a glance, with users completing their first budget 2.4x faster in testing.",
    },
    {
        slug: "bakso-kuning",
        title: "Bakso Kuning & Mi Ayam Rendang Pak Eko",
        eyebrow: "Food & beverage",
        description:
            "A warm, characterful web presence for a beloved local comfort-food spot.",
        role: "UI/UX Designer",
        timeline: "4 weeks",
        tags: ["Branding", "Web design"],
        color: "lilac",
        image: "https://images.unsplash.com/photo-1563245372-f21724e3856d?auto=format&fit=crop&w=1000&q=85",
        overview:
            "Pak Eko is a local food brand with a loyal following and an unmistakable menu. The new site gives that personality a digital home.",
        problem:
            "The menu lived in scattered social posts, making it difficult for new customers to find the right location, hours, and signature dishes.",
        result: "The final site turns the menu into the main character, pairing useful information with the warmth and humor customers already love in person.",
    },
    {
        slug: "tuku-tiket",
        title: "Website Tuku Tiket Dolan",
        eyebrow: "Travel platform",
        description:
            "A joyful ticketing experience for discovering the best things to do around town.",
        role: "UI/UX Designer",
        timeline: "6 weeks",
        tags: ["UX strategy", "Web design"],
        color: "mint",
        image: "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1000&q=85",
        overview:
            "Tuku Tiket Dolan brings local experiences, events, and weekend escapes into one inviting place for curious travelers.",
        problem:
            "People struggled to compare local events and trust unfamiliar organizers. The interface needed to make inspiration and practical trip planning feel like one continuous journey.",
        result: "A clearer discovery structure helped visitors move from browsing to booking with confidence, while the flexible content system gave organizers a stronger voice.",
    },
    {
        slug: "angkringan-kita",
        title: "Angkringan Kita",
        eyebrow: "Community platform",
        description:
            "A digital gathering place for finding small joys, good food, and familiar faces.",
        role: "UI/UX Designer",
        timeline: "5 weeks",
        tags: ["Concept", "Interaction design"],
        color: "blue",
        image: "https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?auto=format&fit=crop&w=1000&q=85",
        overview:
            "Angkringan Kita is a community-first concept that makes neighborhood food culture easier to discover and share.",
        problem:
            "The experience had to serve both hungry visitors and small sellers, balancing a lighthearted visual identity with fast, useful information.",
        result: "The concept creates a sense of place through stories and community recommendations, while keeping essentials like distance and opening hours close at hand.",
    },
];

function App() {
    return (
        <BrowserRouter>
            <div className="site-shell">
                <Navbar />
                <Routes>
                    <Route path="/" element={<Home />} />
                    <Route path="/about" element={<About />} />
                    <Route path="/portfolio/:slug" element={<CaseStudy />} />
                </Routes>
                <Footer />
            </div>
        </BrowserRouter>
    );
}

function Navbar() {
    const [open, setOpen] = useState(false);
    const location = useLocation();
    return (
        <header className="navbar">
            <div className="nav-inner">
                <Link
                    to="/"
                    className="wordmark"
                    onClick={() => setOpen(false)}
                >
                    dyka<span>.</span>
                </Link>
                <nav className={open ? "nav-links is-open" : "nav-links"}>
                    <Link
                        className={location.pathname === "/" ? "active" : ""}
                        to="/"
                        onClick={() => setOpen(false)}
                    >
                        Home
                    </Link>
                    <Link
                        className={
                            location.pathname === "/about" ? "active" : ""
                        }
                        to="/about"
                        onClick={() => setOpen(false)}
                    >
                        About Me
                    </Link>
                    <a
                        className="button button-dark nav-contact"
                        href={WHATSAPP}
                        target="_blank"
                        rel="noreferrer"
                    >
                        Contact Me <ArrowUpRight size={15} />
                    </a>
                </nav>
                <button
                    className="menu-button"
                    aria-label={open ? "Close navigation" : "Open navigation"}
                    onClick={() => setOpen(!open)}
                >
                    {open ? <X size={22} /> : <Menu size={22} />}
                </button>
            </div>
        </header>
    );
}

function Footer() {
    return (
        <footer className="footer">
            <p>
                Designed & built by Dyka <span>© 2024</span>
            </p>
            <div className="socials">
                <a
                    href="https://instagram.com"
                    target="_blank"
                    rel="noreferrer"
                    aria-label="Instagram"
                >
                    <Globe2 size={17} />
                </a>
                <a
                    href="https://linkedin.com"
                    target="_blank"
                    rel="noreferrer"
                    aria-label="LinkedIn"
                >
                    <BriefcaseBusiness size={17} />
                </a>
            </div>
        </footer>
    );
}
function BlobBackground({ className = "" }: { className?: string }) {
    return (
        <div className={`blob-art ${className}`} aria-hidden="true">
            <span className="blob blob-one" />
            <span className="blob blob-two" />
            <span className="blob blob-three" />
        </div>
    );
}
function PortfolioCard({ project }: { project: Project }) {
    return (
        <Link
            to={`/portfolio/${project.slug}`}
            className={`portfolio-card card-${project.color}`}
        >
            <div className="card-copy">
                <span className="eyebrow">{project.eyebrow}</span>
                <h3>{project.title}</h3>
                <p>{project.description}</p>
                <div className="tag-row">
                    {project.tags.map((tag) => (
                        <span key={tag}>{tag}</span>
                    ))}
                </div>
            </div>
            <div className="card-image">
                <img
                    src={project.image}
                    alt={`${project.title} project preview`}
                />
                <span className="card-arrow">
                    <ArrowUpRight size={20} />
                </span>
            </div>
        </Link>
    );
}
function CtaSection() {
    return (
        <section className="cta-section">
            <BlobBackground />
            <div className="cta-content">
                <span className="eyebrow">Have a project in mind?</span>
                <h2>
                    Let's make something
                    <br />
                    <em>meaningful</em> together.
                </h2>
                <a
                    href={WHATSAPP}
                    target="_blank"
                    rel="noreferrer"
                    className="button button-dark"
                >
                    Contact Me <ArrowUpRight size={16} />
                </a>
            </div>
            <div className="cta-sticker">
                ✦ available for
                <br />
                new projects
            </div>
        </section>
    );
}

function Home() {
    return (
        <main>
            <section className="hero">
                <div className="hero-text">
                    <span className="eyebrow">
                        Hello, I'm Dyka <span className="wave">✦</span>
                    </span>
                    <h1>
                        I design digital
                        <br />
                        <em>experiences</em> with
                        <br />
                        intention.
                    </h1>
                    <p className="hero-sub">
                        A UI/UX designer passionate about creating intuitive
                        digital products that make people's lives a little
                        easier.
                    </p>
                    <div className="hero-socials">
                        <a
                            href="https://www.linkedin.com"
                            target="_blank"
                            rel="noreferrer"
                            aria-label="LinkedIn"
                        >
                            <BriefcaseBusiness size={18} />
                        </a>
                        <a
                            href="https://www.behance.net"
                            target="_blank"
                            rel="noreferrer"
                            aria-label="Behance"
                        >
                            <Globe2 size={18} />
                        </a>
                    </div>
                    <a className="scroll-cue" href="#work">
                        <span>Scroll to explore</span>
                        <ArrowDownRight size={17} />
                    </a>
                </div>
                <div className="hero-visual">
                    <BlobBackground />
                    <div className="portrait-frame">
                        <img
                            src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=900&q=85"
                            alt="Dyka, UI/UX designer"
                        />
                    </div>
                    <div className="hero-note">
                        <span>
                            Currently crafting
                            <br />
                            meaningful interfaces
                        </span>
                        <ArrowUpRight size={18} />
                    </div>
                </div>
            </section>
            <section id="work" className="work-section">
                <div className="section-heading">
                    <div>
                        <span className="eyebrow">Selected work</span>
                        <h2>
                            A few things I've
                            <br />
                            <em>worked on.</em>
                        </h2>
                    </div>
                    <span className="section-count">(04)</span>
                </div>
                <div className="portfolio-grid">
                    {projects.map((project) => (
                        <PortfolioCard key={project.slug} project={project} />
                    ))}
                </div>
            </section>
            <CtaSection />
        </main>
    );
}

function About() {
    return (
        <main>
            <section className="about-hero">
                <div>
                    <span className="eyebrow">A little about me</span>
                    <h1>
                        Hello friend,
                        <br />
                        I'm <em>Dyka.</em>
                    </h1>
                    <p>
                        I'm a UI/UX designer who enjoys turning complex problems
                        into simple, thoughtful experiences. I believe good
                        design should feel effortless, but never feel ordinary.
                    </p>
                </div>
                <div className="about-portrait">
                    <BlobBackground />
                    <img
                        src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=900&q=85"
                        alt="Dyka smiling"
                    />
                    <span className="portrait-caption">
                        Based in
                        <br />
                        <strong>Indonesia</strong> <span>↗</span>
                    </span>
                </div>
            </section>
            <section className="about-details">
                <div className="detail-intro">
                    <span className="eyebrow">How I work</span>
                    <h2>
                        Curious by nature,
                        <br />
                        <em>intentional by design.</em>
                    </h2>
                </div>
                <div className="detail-copy">
                    <p>
                        My process starts with listening. I ask questions, look
                        for patterns, and make room for the unexpected. From
                        there, I shape ideas into interfaces that are clear,
                        useful, and human.
                    </p>
                    <p>
                        When I'm away from my screen, you'll probably find me
                        exploring new places, collecting visual references, or
                        trying to make the perfect cup of coffee.
                    </p>
                </div>
                <div className="info-grid">
                    <InfoBlock title="Education">
                        <div className="info-item">
                            <strong>Computer Science</strong>
                            <span>
                                Universitas Putra Bangsa
                                <br />
                                2020 - 2024
                            </span>
                        </div>
                    </InfoBlock>
                    <InfoBlock title="Certifications">
                        <div className="info-item">
                            <strong>MSIB Batch 4</strong>
                            <span>
                                Independent Study Program
                                <br />
                                2023
                            </span>
                        </div>
                        <div className="info-item">
                            <strong>UI/UX Design</strong>
                            <span>
                                Lingkaran
                                <br />
                                2022
                            </span>
                        </div>
                    </InfoBlock>
                    <InfoBlock title="Skills">
                        <div className="skill-list">
                            {[
                                "UX Research",
                                "Ideation",
                                "UI Design",
                                "Validation",
                            ].map((skill) => (
                                <span key={skill}>
                                    <Check size={14} /> {skill}
                                </span>
                            ))}
                        </div>
                    </InfoBlock>
                    <InfoBlock title="Design tools">
                        <div className="tools">
                            <span>
                                <Sigma size={17} /> Figma
                            </span>
                            <span className="tool-dot">Ps</span>
                            <span className="tool-dot ai">Ai</span>
                            <span className="tool-dot notion">N</span>
                        </div>
                    </InfoBlock>
                </div>
            </section>
            <CtaSection />
        </main>
    );
}
function InfoBlock({
    title,
    children,
}: {
    title: string;
    children: ReactNode;
}) {
    return (
        <div className="info-block">
            <span className="eyebrow">{title}</span>
            {children}
        </div>
    );
}

function CaseStudy() {
    const { slug } = useParams();
    const navigate = useNavigate();
    const project = projects.find((item) => item.slug === slug) ?? projects[0];
    const related = projects
        .filter((item) => item.slug !== project.slug)
        .slice(0, 2);
    return (
        <main>
            <section className={`case-hero case-${project.color}`}>
                <button className="back-link" onClick={() => navigate(-1)}>
                    <ArrowLeft size={16} /> Back to work
                </button>
                <div className="case-header">
                    <span className="eyebrow">{project.eyebrow}</span>
                    <h1>{project.title}</h1>
                    <p>{project.description}</p>
                </div>
                <div className="case-meta">
                    <span>
                        <small>Role</small>
                        {project.role}
                    </span>
                    <span>
                        <small>Timeline</small>
                        {project.timeline}
                    </span>
                    <span>
                        <small>Tools</small>Figma, FigJam
                    </span>
                </div>
                <div className="case-cover">
                    <img src={project.image} alt={`${project.title} hero`} />
                    <div className="cover-label">
                        Case study
                        <br />
                        <strong>01 / 04</strong>
                    </div>
                </div>
            </section>
            <section className="case-content">
                <div className="case-sidebar">
                    <span className="eyebrow">On this page</span>
                    <a href="#overview">Overview</a>
                    <a href="#challenge">The challenge</a>
                    <a href="#process">Design approach</a>
                    <a href="#result">The result</a>
                </div>
                <div className="case-body">
                    <CaseSection
                        id="overview"
                        label="01 / Overview"
                        title="A little context."
                    >
                        <p>{project.overview}</p>
                    </CaseSection>
                    <CaseSection
                        id="challenge"
                        label="02 / The challenge"
                        title="Making room for clarity."
                    >
                        <p>{project.problem}</p>
                    </CaseSection>
                    <div id="process" className="case-section">
                        <span className="eyebrow">03 / Design approach</span>
                        <h2>
                            From questions
                            <br />
                            <em>to something real.</em>
                        </h2>
                        <div className="process-list">
                            <div>
                                <b>01</b>
                                <span>
                                    <strong>Discover</strong>Understanding the
                                    people, context, and opportunity.
                                </span>
                            </div>
                            <div>
                                <b>02</b>
                                <span>
                                    <strong>Define</strong>Finding the clearest
                                    path through the problem.
                                </span>
                            </div>
                            <div>
                                <b>03</b>
                                <span>
                                    <strong>Design</strong>Bringing the
                                    direction to life through iteration.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div className="visual-design">
                        <div className="visual-header">
                            <span className="eyebrow">Visual designs</span>
                            <span>Selected screens</span>
                        </div>
                        <div className="visual-grid">
                            <img
                                src={project.image}
                                alt="Selected project screen"
                            />
                            <img
                                src={
                                    projects[
                                        (projects.indexOf(project) + 1) %
                                            projects.length
                                    ].image
                                }
                                alt="Supporting project screen"
                            />
                        </div>
                    </div>
                    <CaseSection
                        id="result"
                        label="04 / The result"
                        title={
                            <>
                                Small changes,
                                <br />
                                <em>real impact.</em>
                            </>
                        }
                    >
                        <p>{project.result}</p>
                    </CaseSection>
                </div>
            </section>
            <section className="related">
                <div className="section-heading">
                    <div>
                        <span className="eyebrow">Keep exploring</span>
                        <h2>
                            Other <em>projects.</em>
                        </h2>
                    </div>
                </div>
                <div className="related-grid">
                    {related.map((item) => (
                        <PortfolioCard key={item.slug} project={item} />
                    ))}
                </div>
            </section>
            <CtaSection />
        </main>
    );
}
function CaseSection({
    id,
    label,
    title,
    children,
}: {
    id: string;
    label: string;
    title: ReactNode;
    children: ReactNode;
}) {
    return (
        <div id={id} className="case-section">
            <span className="eyebrow">{label}</span>
            <h2>{title}</h2>
            {children}
        </div>
    );
}
export default App;
