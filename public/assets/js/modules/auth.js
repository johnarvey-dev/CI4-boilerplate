document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');
    const btnSubmit = document.getElementById('btnSubmit');

    if (loginForm) {
        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            btnSubmit.disabled = true;
            btnSubmit.textContent = 'Signing in...';

            const formData = new FormData(loginForm);

            try {
                // Hits your POST '/login' route automatically
                const response = await fetch(`${window.location.origin}/login`, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    // Redirect based on what the controller sends back (e.g., /admin/dashboard or /user/home)
                    window.location.href = result.redirectUrl;
                } else {
                    alert(result.message || 'Invalid credentials.');
                    btnSubmit.disabled = false;
                    btnSubmit.textContent = 'Sign in';
                }

            } catch (error) {
                console.error('Error:', error);
                alert('An unexpected error occurred.');
                btnSubmit.disabled = false;
                btnSubmit.textContent = 'Sign in';
            }
        });
    }
});
