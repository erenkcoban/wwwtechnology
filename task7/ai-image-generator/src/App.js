import { useState } from 'react';
import OpenAI from 'openai';
import { Button, Card, Col, Container, Form, Row, Spinner } from 'react-bootstrap';
import './App.css';

function App() {
  const [prompt, setPrompt] = useState('');
  const [imageUrl, setImageUrl] = useState('');
  const [error, setError] = useState('');
  const [isLoading, setIsLoading] = useState(false);

  const generateImage = async () => {
    if (!prompt.trim()) {
      setError('Please enter a prompt.');
      return;
    }

    setIsLoading(true);
    setError('');
    setImageUrl('');

    try {
      const client = new OpenAI({
        apiKey: process.env.REACT_APP_AZURE_OPENAI_API_KEY,
        dangerouslyAllowBrowser: true,
      });

      const result = await client.images.generate({
        model: process.env.REACT_APP_AZURE_OPENAI_DEPLOYMENT_NAME,
        prompt: prompt,
        size: '1024x1024',
      });

      const base64Image = result.data[0].b64_json;
      setImageUrl(`data:image/png;base64,${base64Image}`);
    } catch (err) {
      console.error(err);
      setError('Image generation failed. Check your API key, deployment name, and prompt.');
    } finally {
      setIsLoading(false);
    }
  };

  return (
    <Container className="py-5">
      <Row className="justify-content-center">
        <Col md={8} lg={7}>
          <Card className="shadow-lg border-0 app-card">
            <Card.Body className="p-4">
              <h1 className="text-center mb-3">AI Image Generator</h1>
              <p className="text-center text-muted mb-4">
                Enter a prompt and generate an image with gpt-image-1.
              </p>

              <Form>
                <Form.Group className="mb-3">
                  <Form.Label>Prompt</Form.Label>
                  <Form.Control
                    type="text"
                    placeholder="Example: a futuristic city at sunset"
                    value={prompt}
                    onChange={(e) => setPrompt(e.target.value)}
                  />
                </Form.Group>

                <div className="d-grid">
                  <Button variant="primary" onClick={generateImage} disabled={isLoading}>
                    {isLoading ? (
                      <>
                        <Spinner animation="border" size="sm" className="me-2" />
                        Generating...
                      </>
                    ) : (
                      'Generate Image'
                    )}
                  </Button>
                </div>
              </Form>

              {error && <div className="alert alert-danger mt-4 mb-0">{error}</div>}

              {imageUrl && (
                <div className="mt-4 text-center">
                  <img src={imageUrl} alt="Generated result" className="generated-image img-fluid rounded" />
                </div>
              )}
            </Card.Body>
          </Card>
        </Col>
      </Row>
    </Container>
  );
}

export default App;
