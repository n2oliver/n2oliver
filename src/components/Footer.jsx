import '../css/footer.css';
import '../css/gtranslate.css';
import SocialMedia from './SocialMedia';
import '../js/gtranlate-settings.js';
import AAdsSticky from './AAdsSticky';
import { Link } from 'react-router-dom';

function Footer() {
    return (<>
  <footer className="site-footer mt-2 m-auto">
    <Link to="/"><span className="oliver-dev-logo footer-logo">n2oliver</span></Link>
    <div className="d-flex justify-content-center">
      <SocialMedia />
    </div>
    
    <span className="footer-text-small">
      Todos os direitos reservados - n2oliver - 2026
    </span>

    <Link to="/politica-de-privacidade.html">Política de Privacidade</Link>
    <Link to="/contato.php">Contato</Link>
    <span>
      <Link to="mailto:suporte@n2oliver.com" style={{marginLeft: "10px"}}>suporte@n2oliver.com</Link>
    </span>
  </footer>
    <AAdsSticky/></>)
}
export default Footer;