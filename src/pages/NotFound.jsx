import { useEffect } from "react";

function NotFound({ title }) {
  useEffect(() => {
    if (title) {
      document.title = title;
    }
  }, [title]);
  return (
    <main className="not-found-page">
      <div className="container py-4">
        <h1>Página não encontrada</h1>
        <p>A página que você está procurando não existe.</p>
      </div>
    </main>
  );
}
export default NotFound;