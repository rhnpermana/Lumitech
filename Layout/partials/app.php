<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo-icon.png')) ? '' : '../');
?>
<!doctype html>

<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lumitech.id - Jasa Pembuatan Website &amp; Digital Presence Bisnis</title>
    <meta name="description" content="Jasa pembuatan website profesional, landing page konversi tinggi, dan toko online modern di Indonesia. Garansi 3 bulan, cepat, dan SEO-friendly." />
    <meta name="keywords" content="jasa website, buat website, bikin website murah, web developer indonesia, lumitech, landing page bisnis, website umkm" />
    <meta name="author" content="Lumitech.id" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lumitech.id/" />
    <meta property="og:site_name" content="Lumitech.id" />
    <meta property="og:title" content="Lumitech.id - Solusi Website & Digital Presence Bisnismu" />
    <meta property="og:description" content="Jasa pembuatan website, konsultasi & insight bisnis UMKM, desain grafis & branding, video editing, social media management, dan format dokumen." />
    <meta property="og:image" content="<?= $assetBase ?>assets/img/logo.jpeg" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Lumitech.id - Jasa Website, Branding & Digital Creative" />
    <meta name="twitter:description" content="Layanan digital lengkap: Website, Konsultasi UMKM, Desain Grafis, Video Editing, Social Media Management & Joki Cihuyyy." />
    <meta name="twitter:image" content="<?= $assetBase ?>assets/img/logo.jpeg" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= $assetBase ?>assets/img/logo-icon.png" />
    <link rel="apple-touch-icon" href="<?= $assetBase ?>assets/img/logo-icon.png" />

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Space+Grotesk:wght@600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
      rel="stylesheet"
    />
    <style>
      html {
        scroll-behavior: smooth;
      }
      @layer base {
        html,
        body {
          margin: 0;
          padding: 0;
        }
        main > :first-child {
          margin-top: 0 !important;
        }
        main > :last-child {
          margin-bottom: 0 !important;
        }
      }
      /* Modern accessible thin scrollbar */
      ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
      }
      ::-webkit-scrollbar-track {
        background: #f1f4f9;
      }
      ::-webkit-scrollbar-thumb {
        background: #c4c5da;
        border-radius: 9999px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #0047ff;
      }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "inverse-on-surface": "#eef1f6",
              "on-surface-variant": "#434657",
              "on-error-container": "#93000a",
              "secondary-fixed": "#d9e2fd",
              "on-secondary": "#ffffff",
              surface: "#f6f9fe",
              "surface-dim": "#d7dadf",
              primary: "#0035c5",
              "on-tertiary-fixed-variant": "#003fa3",
              "on-secondary-fixed-variant": "#3d475c",
              "tertiary-container": "#0f57d3",
              "on-primary-container": "#d4d9ff",
              outline: "#747688",
              "on-background": "#181c20",
              "on-tertiary": "#ffffff",
              "surface-bright": "#f6f9fe",
              "surface-container": "#ebeef3",
              "tertiary-fixed-dim": "#b2c5ff",
              "primary-fixed-dim": "#b9c3ff",
              "on-primary": "#ffffff",
              "outline-variant": "#c4c5da",
              tertiary: "#0041a6",
              "on-secondary-container": "#5b647b",
              "on-error": "#ffffff",
              "primary-container": "#0047ff",
              "on-primary-fixed": "#001257",
              "inverse-primary": "#b9c3ff",
              "surface-container-high": "#e5e8ed",
              "on-tertiary-container": "#d0daff",
              "primary-fixed": "#dde1ff",
              "on-secondary-fixed": "#121b2f",
              "on-tertiary-fixed": "#001849",
              secondary: "#555e75",
              "error-container": "#ffdad6",
              error: "#ba1a1a",
              "surface-container-highest": "#dfe3e8",
              "surface-container-lowest": "#ffffff",
              "secondary-fixed-dim": "#bdc6e0",
              "inverse-surface": "#2d3135",
              "secondary-container": "#d9e2fd",
              background: "#f6f9fe",
              "tertiary-fixed": "#dae2ff",
              "on-surface": "#181c20",
              "surface-tint": "#0046fa",
              "on-primary-fixed-variant": "#0033c0",
              "surface-container-low": "#f1f4f9",
              "surface-variant": "#dfe3e8",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              "space-xl": "2.5rem",
              gutter: "1.5rem",
              "space-xs": "0.25rem",
              "margin-mobile": "1.25rem",
              "gutter-mobile": "1rem",
              margin: "4rem",
              "space-md": "1rem",
              "space-sm": "0.5rem",
              "space-lg": "1.5rem",
              "space-2xl": "4rem",
            },
            fontFamily: {
              "body-md": ["Plus Jakarta Sans"],
              "headline-xl-mobile": ["Space Grotesk"],
              "label-lg": ["Space Grotesk"],
              "headline-md": ["Space Grotesk"],
              "headline-sm": ["Space Grotesk"],
              "headline-lg": ["Space Grotesk"],
              "body-sm": ["Plus Jakarta Sans"],
              "display-hero-mobile": ["Space Grotesk"],
              "headline-xl": ["Space Grotesk"],
              "label-sm": ["Space Grotesk"],
              "display-hero": ["Space Grotesk"],
              "body-lg": ["Plus Jakarta Sans"],
            },
            fontSize: {
              "body-md": ["15px", { lineHeight: "24px", fontWeight: "400" }],
              "headline-xl-mobile": [
                "30px",
                {
                  lineHeight: "38px",
                  letterSpacing: "-0.01em",
                  fontWeight: "700",
                },
              ],
              "label-lg": [
                "14px",
                {
                  lineHeight: "18px",
                  letterSpacing: "0.04em",
                  fontWeight: "600",
                },
              ],
              "headline-md": [
                "24px",
                { lineHeight: "32px", fontWeight: "600" },
              ],
              "headline-sm": [
                "20px",
                { lineHeight: "28px", fontWeight: "600" },
              ],
              "headline-lg": [
                "32px",
                {
                  lineHeight: "40px",
                  letterSpacing: "-0.01em",
                  fontWeight: "600",
                },
              ],
              "body-sm": ["13px", { lineHeight: "20px", fontWeight: "400" }],
              "display-hero-mobile": [
                "38px",
                {
                  lineHeight: "44px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "headline-xl": [
                "44px",
                {
                  lineHeight: "52px",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "label-sm": [
                "11px",
                {
                  lineHeight: "14px",
                  letterSpacing: "0.08em",
                  fontWeight: "700",
                },
              ],
              "display-hero": [
                "64px",
                {
                  lineHeight: "72px",
                  letterSpacing: "-0.03em",
                  fontWeight: "700",
                },
              ],
              "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
            },
          },
        },
      };
    </script>
  </head>