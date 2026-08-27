import { useEffect } from "react";

function Contato({ title }) {
  useEffect(() => {
    if (title) {
      document.title = title;
    }
  }, [title]);
  return (
    <main className="contato-page">
      <div className="container py-4 d-block bg-white">
        <h1>Contato</h1>
        <p>Entre em contato conosco preenchendo o formulário abaixo:</p>
      </div>
    </main>
  );
}
export default Contato;