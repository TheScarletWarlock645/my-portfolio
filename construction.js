export default {
  async fetch(request) {
    const githubUrl = "https://raw.githubusercontent.com/TheScarletWarlock645/my-portfolio/refs/heads/main/construction.html";

    const response = await fetch(githubUrl);
    const html = await response.text();

    return new Response(html, {
      headers: { "Content-Type": "text/html" }
    });
  }
};
