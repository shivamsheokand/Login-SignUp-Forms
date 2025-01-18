<div class="form-container">
    <h1>Login Form</h1>
    <form action="/login" method="post" class="signup-form">
        @csrf
        <input name="email" type="email" placeholder="Enter Your Email" class="form-input" />
        <input name="password" type="password" placeholder="Enter Your Password" class="form-input" />
        <button type="submit" class="submit-btn">Submit</button>
    </form>
</div>

<style>
    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(to right, #f7f7f7, #d6e1e8);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    /* Form container */
    .form-container {
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 40px;
        border-radius: 15px;
        width: 100%;
        max-width: 450px;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .form-container:hover {
        transform: translateY(-10px);
    }

    /* Header Styling */
    h1 {
        color: #2c3e50;
        font-size: 2rem;
        margin-bottom: 30px;
        text-align: center;
        font-weight: 600;
    }

    /* Form Input Fields */
    .form-input {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        border: 2px solid #dcdfe6;
        font-size: 1rem;
        background-color: #f7f7f7;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        outline: none;
        transition: all 0.3s ease;
    }

    .form-input:focus {
        border-color: #3498db;
        box-shadow: 0 2px 8px rgba(52, 152, 219, 0.3);
    }

    /* Submit Button */
    .submit-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #3498db, #8e44ad);
        color: #fff;
        font-size: 1.2rem;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        background: linear-gradient(135deg, #2980b9, #9b59b6);
        transform: scale(1.05);
    }

    /* Add some smooth effects for focus and hover */
    .form-input:focus, .submit-btn:hover {
        transform: scale(1.03);
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
    }

    /* Placeholder text color and style */
    .form-input::placeholder {
        color: #aaa;
        font-style: italic;
    }

    /* Responsive Design */
    @media (max-width: 600px) {
        .form-container {
            padding: 30px;
            width: 90%;
        }

        h1 {
            font-size: 1.8rem;
        }

        .form-input {
            font-size: 0.95rem;
        }

        .submit-btn {
            font-size: 1rem;
        }
    }
</style>
