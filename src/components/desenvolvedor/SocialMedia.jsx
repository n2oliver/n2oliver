import { Link } from 'react-router-dom';
import '../../css/social-media.css';
function SocialMedia() {
    return (
        <div className="d-flex flex-wrap justify-content-center">
            <div className="d-flex align-content-end">

                <Link style={{ backgroundImage: "linear-gradient(black, darkgray, black)" }} className="social-media-icon px-2 rounded-circle mx-1 align-content-center" rel="noreferrer" to="https://www.tiktok.com/@n2oliver" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </Link>
                <Link style={{ backgroundImage: "linear-gradient(red, wheat, red)" }} className="social-media-icon px-2 rounded-circle mx-1 align-content-center" rel="noreferrer" to="https://www.youtube.com/@n2oliver" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </Link>
                <Link style={{ backgroundImage: "linear-gradient(magenta, pink, magenta)" }} className="social-media-icon px-2 rounded-circle mx-1 align-content-center" to="https://www.instagram.com/n2oliver/" target="_blank" rel="noopener noreferrer">
                    <i className="fa-brands fa-instagram"></i>
                </Link>
                <Link style={{ backgroundImage: "linear-gradient(black, gray, black)" }} className="social-media-icon px-2 rounded-circle mx-1 align-content-center" to="https://github.com/n2oliver" target="_blank" rel="noopener noreferrer">
                    <i className="fa-brands fa-github"></i>
                </Link>
            </div>
            <div className="d-flex justify-content-center">
                <Link className="libutton" rel="noreferrer" to="https://www.linkedin.com/comm/mynetwork/discovery-see-all?usecase=PEOPLE_FOLLOWS&followMember=oliver-c-ab2748b9" target="_blank">Seguir no LinkedIn</Link>
            </div>
        </div>);
}
export default SocialMedia;