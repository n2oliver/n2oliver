import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
  base: '/',
  plugins: [
    react({
      include: /\.(js|jsx|ts|tsx)$/
    })
  ],
  server: {
    host: '0.0.0.0',
    port: 8000
  },
  test: {
    environment: 'jsdom',
    globals: true,
    setupFiles: './src/setupTests.js'
  },
  build: {
    publicDir: 'public',
    outDir: 'dist',
    sourcemap: true,
    emptyOutDir: true,
    rollupOptions: {
      external: []
    }
  }
});