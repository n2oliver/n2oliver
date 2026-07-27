import DonationSectionWrapper from "./DonationSectionWrapper";
import Recentes from "./jogos/Recentes";
import Secoes from "./Secoes";
import Slogan from "./Slogan";

function Template() {
    return (
        <section id="template" className="w-100 m-auto n2oliver-jogos d-flex flex-column justify-content-center"
            alt="">
            <div id="games" className="container m-auto p-0">
                <div id="template-details" className="flex-row px-0 col-md-10">
                    <div className="w-100">
                        <div className="w-100 row justify-content-around">
                            <Recentes />
                            <Secoes />
                            <Slogan />
                            <DonationSectionWrapper />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
export default Template;