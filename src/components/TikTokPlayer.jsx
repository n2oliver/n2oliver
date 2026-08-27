function TikTokPlayer({ videoId, videoTitle }) {
    return <>
        <blockquote
            className="tiktok-embed"
            cite={`https://www.tiktok.com/@n2oliver/video/${videoId}`}
            data-video-id={videoId}
            style={{ maxWidth: "605px", minWidth: "325px" }} >
            <section>
                { videoTitle }
            </section>
        </blockquote>
        <script async src="https://www.tiktok.com/embed.js"></script>
    </>

}