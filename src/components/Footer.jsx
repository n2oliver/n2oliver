import '../css/footer.css';
import SocialMedia from './desenvolvedor/SocialMedia.jsx';
import { Link, useLocation } from 'react-router-dom';
import { useEffect } from 'react';

function Footer() {
    const location = useLocation();

    const negativePathNames = [
        "/jogos/linha-amarela/jogo",
        "/jogos/linha-amarela/jogo/",
        "/jogos/linhaamarela/jogo",
        "/jogos/linhaamarela/jogo/"
    ];

    const showFooter = !negativePathNames.includes(location.pathname);

    return showFooter && (
        <footer className="site-footer mt-2 mx-0 m-auto">
            <Link to="/">
                <span className="oliver-dev-logo footer-logo">
                    n2oliver
                </span>
            </Link>

            <SocialMedia />

            <span className="footer-text-small">
                Todos os direitos reservados - n2oliver - 2026
            </span>

            <Link to="/politica-de-privacidade.html">
                Política de Privacidade
            </Link>

            <Link to="/contato.php">
                Contato
            </Link>

            <span>
                <Link
                    to="mailto:suporte@n2oliver.com"
                    style={{ marginLeft: "10px" }}
                >
                    suporte@n2oliver.com
                </Link>
            </span>
        </footer>
    );
}

export default Footer;