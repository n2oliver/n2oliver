import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';

function YoutubePlayer({ video, show, handleClose }) {
    return <Modal
        data-bs-theme="dark"
        show={show}
        onHide={handleClose}
        backdrop="static"
        keyboard={false}
      >
        <Modal.Header closeButton>
            <Modal.Title>{video.titulo}</Modal.Title>
        </Modal.Header>
        <Modal.Body className="pt-0 m-0">
            <iframe
                width="560"
                height="315"
                src={video.youtube}
                title={ video.titulo }
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; fullscreen"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen></iframe>
                
            <Button variant="dark" onClick={handleClose}>Voltar</Button>
        </Modal.Body>
    </Modal>
}
export default YoutubePlayer;