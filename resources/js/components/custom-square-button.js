// resources/js/components/custom-square-button.js
class CustomSquareButton extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: 'open' });
    }

    connectedCallback() {
        const title = this.getAttribute('title') || 'Título';
        const subtitle = this.getAttribute('subtitle') || 'Subtítulo';
        const icon = this.getAttribute('icon') || 'Icon';

        this.shadowRoot.innerHTML = `
            <style>
                .container {
                    width: 100%;
                    height: 100%;
                    background-color: #3b82f6;
                    color: white;
                    border-radius: 10px;
                    padding: 12px;
                    display: flex;
                    flex-direction: column;
                    
                    justify-content: center;
                    text-align: center;
                    box-sizing: border-box;
                    transition: background-color 0.3s;
                }

                .container:hover {
                    background-color: #2563eb;
                }

                img {
                    width: 80px;
                    height: 80px;
                    margin-bottom: 10px;
                    text-align: center;
                    position: relative; top: 10px; left: 35px;
                    padding: 0 0 10px 0;
                }

                h4 {
                    margin: 0;
                    font-size: 18px;
                    text-align: left;
                }

                p {
                    margin: 4px 0 0 0;
                    font-size: 14px;
                    color: #e0e7ff;
                    text-align: left;
                }
            </style>
            <div class="container">
                <h4>${title}</h4>
                <p>${subtitle}</p>
                <img src="${icon}" alt="icon">
            </div>
        `;
    }
}

customElements.define('custom-square-button', CustomSquareButton);