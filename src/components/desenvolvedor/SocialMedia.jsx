import { Link } from 'react-router-dom';
import '../../css/social-media.css';
function SocialMedia() {
    return (
        <div className="d-flex align-content-end">
            <Link className="libutton" rel="noreferrer" to="https://www.linkedin.com/comm/mynetwork/discovery-see-all?usecase=PEOPLE_FOLLOWS&followMember=oliver-c-ab2748b9" target="_blank">Seguir no LinkedIn</Link>
            <Link className="social-media-icon px-2 rounded-circle mx-1 align-content-center" to="https://wa.me/5521986695629?text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es!" target="_blank" rel="noopener noreferrer">
                <i className="fa-brands fa-whatsapp"></i>
            </Link>
            <Link style={{backgroundImage: "linear-gradient(magenta, pink, magenta)"}} className="social-media-icon px-2 rounded-circle mx-1 align-content-center" to="https://www.instagram.com/n2oliver/" target="_blank" rel="noopener noreferrer">
                <i className="fa-brands fa-instagram"></i>
            </Link>
            <Link style={{backgroundImage: "linear-gradient(black, gray, black)"}} className="social-media-icon px-2 rounded-circle mx-1 align-content-center" to="https://github.com/n2oliver" target="_blank" rel="noopener noreferrer">
                <i className="fa-brands fa-github"></i>
            </Link>
        </div>);
}
export default SocialMedia;