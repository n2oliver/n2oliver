function VideoPlayer({ video }) {
    return <iframe
        width="100%"
        height="100%"
        src={video.youtube}
        title={ video.titulo }
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; fullscreen"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen></iframe>
}
export default VideoPlayer;