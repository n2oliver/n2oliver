import Modal from 'react-bootstrap/Modal';
import { Link } from 'react-router-dom';
import VideoPlayer from './VideoPlayer';

function YoutubePlayer({ video, show, handleClose }) {
    return <Modal
        data-bs-theme="dark"
        show={show}
        onHide={handleClose}
        keyboard={false}
        size="lg"
        centered
        scrollable
        fullscreen
      >
        <Modal.Header closeButton>
            <Modal.Title><Link className="navbar-brand rounded text-start" to="/">
                            <img
                                src="/img/n2-ico.jpg"
                                width="32"
                                className="rounded"
                                alt="logo"
                            />
                            oliver
                        </Link> - Design Patterns - {video.titulo}</Modal.Title>
        </Modal.Header>
        <Modal.Body className="pt-0 m-0">
            <VideoPlayer video={video} />
        </Modal.Body>
    </Modal>
}
export default YoutubePlayer;