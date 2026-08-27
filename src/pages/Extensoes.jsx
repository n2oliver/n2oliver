import { useEffect } from "react";
import Header from "../components/extensoes/Header";
import Section from "../components/extensoes/Section";
import "../css/extensoes/style.css";

function Extensoes({ title }) {
  useEffect(() => {
    if (title) {
      document.title = title;
    }
  }, [title]);
  return (<>
    <Header />
    <Section />
  </>);
}
export default Extensoes;