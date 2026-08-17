<?php include 'components/header.php'; ?>

<style>
.auth-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #2b020a 0%, #80081d 50%, #2b020a 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 120px 1.5rem 60px;
}

.auth-card {
    background: #1a1d22;
    border: 1px solid rgba(212, 175, 55, 0.2);
    border-radius: 20px;
    padding: 3rem 3rem;
    width: 100%;
    max-width: 500px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.5);
}

.auth-logo-wrap {
    text-align: center;
    margin-bottom: 2rem;
}

.auth-logo-wrap img {
    height: 60px;
    margin-bottom: 0.5rem;
}

.auth-title {
    font-family: var(--font-heading);
    font-size: 1.9rem;
    font-weight: 700;
    color: #ffffff;
    text-align: center;
    margin-bottom: 0.4rem;
}

.auth-title span { color: #d4af37; }

.auth-subtitle {
    text-align: center;
    color: #94a3b8;
    font-size: 0.9rem;
    margin-bottom: 2rem;
}

.auth-divider {
    width: 50px;
    height: 3px;
    background: #d4af37;
    margin: 0.8rem auto 1.8rem;
    border-radius: 2px;
}

.auth-form-group {
    margin-bottom: 1.3rem;
}

.auth-label {
    display: block;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #94a3b8;
    margin-bottom: 0.45rem;
}

.auth-input {
    width: 100%;
    background: #2b020a;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 8px;
    padding: 0.85rem 1.1rem;
    color: #ffffff;
    font-size: 0.95rem;
    outline: none;
    transition: all 0.3s;
    font-family: inherit;
    box-sizing: border-box;
}

.auth-input:focus {
    border-color: #d4af37;
    box-shadow: 0 0 0 3px rgba(212,175,55,0.15);
}

.auth-input::placeholder { color: #475569; }

.auth-input-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.auth-submit-btn {
    width: 100%;
    background: #d4af37;
    color: #2b020a;
    padding: 0.95rem;
    border: none;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s;
    margin-top: 0.8rem;
}

.auth-submit-btn:hover {
    background: #c59b27;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(212,175,55,0.4);
}

.auth-submit-btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

.auth-footer-link {
    text-align: center;
    margin-top: 1.5rem;
    color: #64748b;
    font-size: 0.88rem;
}

.auth-footer-link a {
    color: #d4af37;
    font-weight: 700;
    text-decoration: none;
}

.auth-footer-link a:hover { text-decoration: underline; }

.auth-alert {
    padding: 0.85rem 1.1rem;
    border-radius: 8px;
    font-size: 0.88rem;
    margin-bottom: 1.2rem;
    display: none;
    align-items: center;
    gap: 0.5rem;
}

.auth-alert.success {
    background: rgba(16,185,129,0.15);
    border: 1px solid rgba(16,185,129,0.3);
    color: #6ee7b7;
}

.auth-alert.error {
    background: rgba(239,68,68,0.15);
    border: 1px solid rgba(239,68,68,0.3);
    color: #fca5a5;
}

.password-wrap {
    position: relative;
}

.toggle-pass {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #475569;
    cursor: pointer;
    font-size: 1rem;
    padding: 0;
}

.toggle-pass:hover { color: #d4af37; }
</style>

<section class="auth-page">
    <div class="auth-card">
        <!-- Logo -->
        <div class="auth-logo-wrap">
            <img src="assets/images/nav_logo.png" alt="MyPropertyStation Logo">
        </div>

        <h1 class="auth-title">Create <span>Account</span></h1>
        <div class="auth-divider"></div>
        <p class="auth-subtitle">Join MyPropertyStation and start your luxury property journey</p>

        <!-- Alert Box -->
        <div id="signupAlert" class="auth-alert"></div>

        <form id="signupForm" novalidate>
            <!-- Full Name -->
            <div class="auth-form-group">
                <label class="auth-label">Full Name *</label>
                <input type="text" id="full_name" name="full_name" class="auth-input" placeholder="Enter your full name" required>
            </div>

            <!-- Email + Phone -->
            <div class="auth-input-row">
                <div class="auth-form-group">
                    <label class="auth-label">Email Address *</label>
                    <input type="email" id="email" name="email" class="auth-input" placeholder="you@email.com" required>
                </div>
                <div class="auth-form-group">
                    <label class="auth-label">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" class="auth-input" placeholder="10-digit mobile" maxlength="10" required>
                </div>
            </div>

            <!-- Password -->
            <div class="auth-form-group">
                <label class="auth-label">Password *</label>
                <div class="password-wrap">
                    <input type="password" id="password" name="password" class="auth-input" placeholder="Min 8 characters" required>
                    <button type="button" class="toggle-pass" onclick="togglePass('password', this)"><i class="fa-solid fa-eye"></i></button>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="auth-form-group">
                <label class="auth-label">Confirm Password *</label>
                <div class="password-wrap">
                    <input type="password" id="confirm_password" name="confirm_password" class="auth-input" placeholder="Re-enter your password" required>
                    <button type="button" class="toggle-pass" onclick="togglePass('confirm_password', this)"><i class="fa-solid fa-eye"></i></button>
                </div>
            </div>

            <button type="submit" id="signupBtn" class="auth-submit-btn">Create Account</button>
        </form>

        <div class="auth-footer-link">
            Already have an account? <a href="login.php">Sign In</a>
        </div>
    </div>
</section>

<script>
function togglePass(id, btn) {
    const input = document.getElementById(id);
    const isPass = input.type === 'password';
    input.type = isPass ? 'text' : 'password';
    btn.innerHTML = isPass ? '<i class="fa-solid fa-eye-slash"></i>' : '<i class="fa-solid fa-eye"></i>';
}

function showAlert(type, msg) {
    const el = document.getElementById('signupAlert');
    el.className = `auth-alert ${type}`;
    el.innerHTML = `<i class="fa-solid ${type === 'success' ? 'fa-circle-check' : 'fa-circle-xmark'}"></i> ${msg}`;
    el.style.display = 'flex';
    el.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

document.getElementById('signupForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const btn = document.getElementById('signupBtn');
    btn.disabled = true;
    btn.textContent = 'Creating Account...';

    const payload = {
        full_name:        document.getElementById('full_name').value.trim(),
        email:            document.getElementById('email').value.trim(),
        phone:            document.getElementById('phone').value.trim(),
        password:         document.getElementById('password').value,
        confirm_password: document.getElementById('confirm_password').value,
    };

    try {
        const res  = await fetch('../backend/api/auth/signup.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify(payload),
        });
        const data = await res.json();
        if (data.success) {
            showAlert('success', data.message);
            this.reset();
            setTimeout(() => window.location.href = 'login.php', 2000);
        } else {
            showAlert('error', data.message);
        }
    } catch (err) {
        showAlert('error', 'Network error. Please try again.');
    } finally {
        btn.disabled = false;
        btn.textContent = 'Create Account';
    }
});
</script>

<?php include 'components/footer.php'; ?>
