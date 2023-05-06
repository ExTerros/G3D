window.onload = () => {

    // Définir les variables
    let images = ["assets/slider/deratisation-01.jpg", "assets/slider/deratisation-02.jpg", "assets/slider/fumigation-01.jpg"];
    let currentImage = 0;
    let imageContainer = document.querySelector('#image-slider');

    // Changer l'image toutes les 8 secondes
    setInterval(() => {
        currentImage = (currentImage + 1) % images.length;
        imageContainer.classList.add('fade-out');
        setTimeout(() => {
            imageContainer.src = images[currentImage];
            imageContainer.classList.remove('fade-out');
        }, 500);
    }, 8000);

    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function () {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });

    gsap.registerPlugin(ScrollTrigger);

    const navText = document.querySelectorAll('#nav-ul');
    gsap.set(navText, { opacity: 0, y: -50 });
    gsap.to(navText, { duration: 1, opacity: 1, y: 0, stagger: 0.2 });

    const elements = document.querySelectorAll('#TextAChanger');
    gsap.set(elements, { opacity: 0, x: -100 });
    gsap.to(elements, { duration: 1, opacity: 1, x: 0, stagger: 0.2 });

    const fumigation = document.querySelectorAll("#fumigation");
    const dératisation = document.querySelectorAll("#dératisation");

    gsap.set(fumigation, { opacity: 0, x: 300 });
    gsap.set(dératisation, { opacity: 0, x: 300 });

    gsap.to(fumigation, {
        duration: 1,
        opacity: 1,
        x: 0,
        stagger: 0.2,
        scrollTrigger: {
            trigger: fumigation,
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.to(dératisation, {
        duration: 1,
        opacity: 1,
        x: 0,
        stagger: 0.2,
        scrollTrigger: {
            trigger: dératisation,
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none reverse",
        },
    });

    const désinsectisation = document.querySelectorAll("#désinsectisation");
    const désinfection = document.querySelectorAll("#désinfection");

    gsap.set(désinsectisation, { opacity: 0, x: -300 });
    gsap.set(désinfection, { opacity: 0, x: -300 });

    gsap.to(désinsectisation, {
        duration: 1,
        opacity: 1,
        x: 0,
        stagger: 0.2,
        scrollTrigger: {
            trigger: désinsectisation,
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.to(désinfection, {
        duration: 1,
        opacity: 1,
        x: 0,
        stagger: 0.2,
        scrollTrigger: {
            trigger: désinfection,
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none reverse",
        },
    });
}

