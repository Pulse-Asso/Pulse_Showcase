import Image from "next/image";
import Link from "next/link";

const Header = () => {
  return (
    <div className="container-xxl position-relative p-0" id="home">
      <nav className="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <Link href="/" className="navbar-brand p-0">
          <Image
            src="/balnc_transparent.png"
            alt="Logo"
            width={170}
            height={50}
          />
        </Link>
        <button
          className="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span className="fa fa-bars"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarCollapse">
          <div className="navbar-nav mx-auto py-0">
            <Link href="#Pulse" className="nav-item nav-link">
              A propos
            </Link>
            <Link href="#qui" className="nav-item nav-link">
              Pour qui ?
            </Link>
            <Link href="#Fonctionnalites" className="nav-item nav-link">
              Fonctionnalités
            </Link>
            <Link href="#Bienfaits" className="nav-item nav-link">
              Bienfaits
            </Link>
            <Link href="/page2 Nath" className="nav-item nav-link">
              L'équipe
            </Link>
            <Link href="#contact" className="nav-item nav-link">
              Contact
            </Link>
          </div>
          <a
            href="https://forms.gle/u26uAQ3QdyvvLwHX9"
            className="btn btn-custom rounded-pill py-2 px-4 ms-3 d-none d-lg-block"
          >
            Obtenir un devis
          </a>
        </div>
      </nav>

      {/* Section hero */}
      <div className="container-xxl bg-primary hero-header">
        <div className="container px-lg-5">
          <div className="row g-5">
            <div className="col-lg-8 text-center text-lg-start">
              <h1 className="text-white mb-4 animated slideInDown">
                Booster la vie sur vos campus avec PULSE
              </h1>
              <p className="text-white pb-3 animated slideInDown">
                Une application intuitive pour atteindre efficacement les
                étudiants en centralisant l'ensemble de la communication
                présente sur les réseaux actuels
              </p>
              <Link
                href="#Pulse"
                className="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft"
              >
                En savoir plus
              </Link>
              <Link
                href="#contact"
                className="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight"
              >
                Nous contacter
              </Link>
            </div>
            <div
              className="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp"
              data-wow-delay="0.3s"
            >
              <div className="owl-carousel screenshot-carousel">
                <Image
                  src="/Home.png"
                  alt="Screenshot 1"
                  width={300}
                  height={600}
                />
                <Image
                  src="/9.png"
                  alt="Screenshot 2"
                  width={300}
                  height={600}
                />
                <Image
                  src="/6.png"
                  alt="Screenshot 3"
                  width={300}
                  height={600}
                />
                <Image
                  src="/5.png"
                  alt="Screenshot 4"
                  width={300}
                  height={600}
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Header;
