import { useEffect } from "react";
import DownloadSection from "../../components/extensoes/leitor-de-pdf/DownloadSection";
import Section from "../../components/extensoes/leitor-de-pdf/Section";
import "../../css/extensoes/style.css";

function LeitorDePdf({ title }) {
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
export default LeitorDePdf;