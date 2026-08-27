import { useEffect } from "react";
import DownloadSection from "../../components/extensoes/inspetor-visual/DownloadSection";
import Section from "../../components/extensoes/inspetor-visual/Section";
import "../../css/extensoes/style.css";

function InspetorVisual({ title }) {
  useEffect(() => {
    if (title) {
      document.title = title;
    }
  }, [title]);
  return (<>
    <Section />
    <DownloadSection />
  </>);
}
export default InspetorVisual;