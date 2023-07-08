
    // Mengambil referensi elemen-elemen pada form
    const form = document.getElementById('form-step1');
    const fullNameInput = document.getElementById('InputName');
    const emailInput = document.getElementById('InputEmail');
    const passwordInput = document.getElementById('InputPassword');
    const rePasswordInput = document.getElementById('InputPasswordConfirm');
    const birthDateInput = document.getElementById('InputBirthDate');
    const genderInput = document.getElementById('InputGender');
    const jobsInput = document.getElementById('InputJobs');
    const nikInput = document.getElementById('InputNIK');

    // Event listener ketika form di-submit
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah form untuk melakukan submit

        // Membaca nilai-nilai input
        const fullNameValue = fullNameInput.value;
        const emailValue = emailInput.value;
        const passwordValue = passwordInput.value;
        const rePasswordValue = rePasswordInput.value;
        const birthDateValue = birthDateInput.value;
        const genderValue = genderInput.value;
        const jobsValue = jobsInput.value;
        const nikValue = nikInput.value;

        // Membuat objek untuk menyimpan data registrasi
        const registrationData = {
            fullName: fullNameValue,
            email: emailValue,
            password: passwordValue,
            rePassword: rePasswordValue,
            dateOfBirth: birthDateValue,
            gender: genderValue,
            jobs: jobsValue,
            nik: nikValue
        };

        // Menyimpan data registrasi ke dalam local storage dengan key 'registrationData'
        localStorage.setItem('registrationData', JSON.stringify(registrationData));

        // Mengarahkan pengguna ke halaman selanjutnya (misalnya route 'reg2')
        window.location.href = "{{ route('reg2')}}";
    });

