import { useEffect } from "react";
import { Col, Container, Row, Form, Button } from "react-bootstrap";

function NMocao({ title }) {
    useEffect(() => {
        document.title = title;
    }, [title]);
    return <div><h1 className="ubuntu">NMOÇÃO</h1>
        <Container>
            <Row>
                <Col>
                    <h1 className="ubuntu text-dark">Como você se sente hoje?</h1>
                    <Row>
                        <Col className="text-center"><img src="/img/nmocao/happy.png" alt="Happy" width="50%" /><div>Bem, Alegre, Para Cima</div></Col>
                        <Col className="text-center"><img src="/img/nmocao/neutral.png" alt="Neutral" width="50%" /><div>Neutro, Tranquilo, Confuso</div></Col>
                        <Col className="text-center"><img src="/img/nmocao/sad.png" alt="Sad" width="50%" /><div>Mal, Triste, Para Baixo</div></Col>
                    </Row>
                    <div style={{ height: "40px" }}></div>
                    <Row>
                        <Col className="text-center">
                            <Form>
                                <Form.Group className="mb-3" controlId="form.Descricao">
                                    <Form.Label><h1 className="ubuntu text-dark">Descreva seu sentimento</h1></Form.Label>
                                    <hr className="separador" />
                                    <Form.Control as="textarea" rows={4}
                                        onFocus={(e) => {
                                            Object.values(document.getElementsByClassName("separador")).forEach(element => {
                                                element.style.display = "none";
                                            });
                                        }}
                                        onBlur={() => {
                                            Object.values(document.getElementsByClassName("separador")).forEach(element => {
                                                element.style.display = "block";
                                            });
                                        }} />
                                </Form.Group>
                                <Button variant="primary" type="submit">
                                    Enviar
                                </Button>
                            </Form>
                        </Col>
                    </Row>
                </Col>
                <Col>Estatísticas</Col>
            </Row>
        </Container>
    </div>;
}
export default NMocao;