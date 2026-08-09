function Intro () {
    return (<div className="intro overflow-auto">
        <div className="container d-flex row justify-content-end align-items-end align-content-end text-center bg">
            <div className="col ads">
                <div style={{ 
                    height: "50px",
                    background: "rgba(0,155,155,.7)",
                    alignSelf: "center",
                    justifySelf: "center",
                    alignContent: "center",
                    padding: "0px 14px 0px 14px",
                    borderRadius: "5px",
                    cursor: "pointer"
                }}>Jogar Agora <i className="fa-solid fa-rectangle-ad"></i>
                </div>
            </div>
        </div>
    </div>);
}
export default Intro;