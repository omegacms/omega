<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Whoosh!</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@^2/dist/tailwind.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
			/* Stili per il tooltip */
			a.tooltip {
    			position: relative;
			}

			a.tooltip::after {
    			content: attr(title);
    			position: absolute;
    			bottom: 100%;
    			left: 50%;
    			transform: translateX(-50%);
    			padding: 0.5em;
    			background-color: #333;
    			color: #fff;
    			border-radius: 4px;
    			font-size: 0.75rem;
    			white-space: nowrap;
    			opacity: 0;
    			transition: opacity 0.3s ease;
    			pointer-events: none;
			}

			a.tooltip:hover::after {
    			opacity: 1;
			}
        </style>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="min-h-screen flex flex-col">
            {!! $contents !!}
        </div>
        <script>
            // Gestione dello stato attivo dei tab
            const tabs = document.querySelectorAll('.tab');
            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    const tabId = this.getAttribute('data-tab');
                    const tabContent = document.getElementById(tabId);
                    tabs.forEach(t => t.classList.remove('border-blue-500'));
                    this.classList.add('border-blue-500');
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.add('hidden');
                    });
                    tabContent.classList.remove('hidden');
                });
            });
            
            function toggleEmailForm() {
                const emailForm = document.getElementById('emailForm');
                emailForm.classList.toggle('hidden');
            }

            function closeEmailForm() {
                const emailForm = document.getElementById('emailForm');
                emailForm.classList.add('hidden');
            }

            function togglePasswordForm() {
                const passwordForm = document.getElementById('passwordForm');
                passwordForm.classList.toggle('hidden');
            }

            function closePasswordForm() {
                const passwordForm = document.getElementById('passwordForm');
                passwordForm.classList.add('hidden');
            }
        </script>
    </body>
</html>
