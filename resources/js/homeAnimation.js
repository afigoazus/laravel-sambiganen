import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

window.onload = () => {
    // section one
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".fade-in-sec-one",
            start: "top 70%",
            toggleActions: "play none none reverse",
        },
    });

    tl.from(".fade-in-sec-one h1, .fade-in-sec-one h2, .fade-in-sec-one p", {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: "power2.out",
        stagger: 0.2,
    });

    tl.from(
        ".fade-in-sec-one img",
        {
            opacity: 0,
            x: 100,
            duration: 1.5,
            ease: "power2.out",
        },
        "<"
    );

    tl.from(".fade-in-sec-one a", {
        opacity: 0,
        y: 20,
        duration: 1,
        ease: "power2.out",
    });

    // section two
    gsap.from(".fade-in-sec-two .first", {
        opacity: 0,
        y: -50,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-two",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.from(
        ".fade-in-sec-two .second",
        {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".fade-in-sec-two",
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
        },
        "<"
    );

    gsap.to(".fade-in-sec-two .first a, .fade-in-sec-two .second a", {
        delay: 1.5,
        boxShadow: "0px 0px 20px 6px rgba(255, 255, 255, 0.4)",
        duration: 1,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut",
    });

    gsap.from(".fade-in-sec-two h2", {
        opacity: 0,
        x: -50,
        ease: "power2.out",
        duration: 1.5,
        scrollTrigger: {
            trigger: ".fade-in-sec-two h2",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.from(".fade-in-sec-two .glow-btn", {
        opacity: 0,
        x: 50,
        ease: "power2.out",
        duration: 1.5,
        scrollTrigger: {
            trigger: ".fade-in-sec-two .glow-btn",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.to(".fade-in-sec-two .glow-btn", {
        delay: 1.5,
        boxShadow: "0px 0px 20px 6px rgba(255, 223, 0, 0.8)",
        duration: 1,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut",
    });

    // section three
    gsap.from(
        ".fade-in-sec-three h2, .fade-in-sec-three h3, .fade-in-sec-three span, .fade-in-sec-three a.detail",
        {
            opacity: 0,
            x: -100,
            duration: 1,
            ease: "power2.out",
            stagger: 0.2,
            scrollTrigger: {
                trigger: ".fade-in-sec-three",
                start: "top 70%",
                toggleActions: "play none none reverse",
            },
        }
    );

    gsap.from(
        ".fade-in-sec-three img",
        {
            opacity: 0,
            x: 100,
            duration: 1.5,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".fade-in-sec-three",
                start: "top 70%",
                toggleActions: "play none none reverse",
            },
        },
        "<"
    );

    // section four
    // desktop
    gsap.from(".fade-in-sec-four .desktop h2", {
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-four .desktop h2",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.from(".fade-in-sec-four .desktop img", {
        delay: 0.8,
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        stagger: 0.2,
        scrollTrigger: {
            trigger: ".fade-in-sec-four .desktop img",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    // mobile
    gsap.from(".fade-in-sec-four .mobile h2", {
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-four .mobile h2",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.from(".fade-in-sec-four .mobile article", {
        delay: 0.8,
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-four .mobile article",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.from(".fade-in-sec-four .detail", {
        delay: 0.8,
        opacity: 0,
        y: 50,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-four .detail",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    // section five
    gsap.from(".fade-in-sec-five h2", {
        opacity: 0,
        x: -100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-five h2",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.from(".fade-in-sec-five a", {
        opacity: 0,
        x: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-five a",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.to(".fade-in-sec-five a", {
        delay: 1.5,
        boxShadow: "0px 0px 20px 3px rgba(255, 223, 0, 0.8)",
        duration: 1,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut",
    });

    // section six
    // mobile
    gsap.from(".fade-in-sec-six .mobile h2", {
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-six .mobile h2",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.from(".fade-in-sec-six .mobile h2", {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-six .mobile h2",
            start: "top 100%",
            toggleActions: "play none none reverse",
        },
    });

    const items = document.querySelectorAll(
        ".fade-in-sec-six .mobile .creation-item"
    );
    items.forEach((item, index) => {
        gsap.from(item, {
            x: index % 2 === 0 ? -100 : 100,
            delay: 1,
            opacity: 0,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: item,
                start: "top 60%",
                toggleActions: "play none none reverse",
            },
        });
    });

    // desktop
    gsap.from(".fade-in-sec-six .desktop h2", {
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-six .desktop h2",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    const agendaHeaders = document.querySelectorAll(
        ".fade-in-sec-six .desktop h3"
    );
    agendaHeaders.forEach((item, index) => {
        gsap.from(item, {
            x: index % 2 === 0 ? -100 : 100,
            delay: 1,
            opacity: 0,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: item,
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
        });
    });

    gsap.from(".fade-in-sec-six .desktop a", {
        opacity: 0,
        y: 100,
        duration: 1,
        stagger: 0.5,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-six .desktop a",
            start: "top 90%",
            toggleActions: "play none none reverse",
        },
    });

    // section seven
    // mobile
    gsap.from(".fade-in-sec-seven h2", {
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-seven h2",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    // mobile
    gsap.from(".fade-in-sec-seven .lembaga-item-mobile", {
        opacity: 0,
        x: 100,
        y: 100,
        duration: 1,
        stagger: 0.3,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-seven .lembaga-item-mobile",
            start: "top 80%",
            toggleActions: "play none none reverse",
        },
    });

    // desktop
    gsap.from(".fade-in-sec-seven .lembaga-item-desktop", {
        opacity: 0,
        y: 100,
        x: 100,
        duration: 1,
        stagger: 0.3,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-seven .lembaga-item-desktop",
            start: "top 90%",
            toggleActions: "play none none reverse",
        },
    });

    // section eight
    // mobile
    gsap.from(".fade-in-sec-eight-mobile h2", {
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-eight-mobile",
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
    });

    const demoMobileItems = document.querySelectorAll(
        ".fade-in-sec-eight-mobile .item"
    );
    demoMobileItems.forEach((item, idx) => {
        gsap.from(item, {
            opacity: 0,
            x: idx % 2 === 0 ? -100 : 100,
            delay: (idx + 1) * 0.3,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".fade-in-sec-eight-mobile",
                start: "top 75%",
                toggleActions: "play none none reverse",
            },
        });
    });

    const demoMobileItemsCountUp = document.querySelectorAll(
        ".fade-in-sec-eight-mobile .item h3"
    );
    demoMobileItemsCountUp.forEach((item, idx) => {
        const targetValue = parseInt(item.textContent.replace(/\D/g, ""), 10);
        item.textContent = "0";

        gsap.fromTo(
            item,
            { innerHTML: 0, delay: (idx + 1) * 0.3 },
            {
                innerHTML: targetValue,
                duration: 2,
                ease: "power2.out",
                snap: { innerHTML: 1 },
                scrollTrigger: {
                    trigger: ".fade-in-sec-eight-mobile",
                    start: "top 75%",
                    toggleActions: "play none none reverse",
                },
            }
        );
    });

    // desktop
    gsap.from(".fade-in-sec-eight-desktop h2", {
        opacity: 0,
        y: 100,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-eight-mobile",
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.from(".fade-in-sec-eight-desktop .item", {
        opacity: 0,
        y: 100,
        stagger: 0.3,
        duration: 1,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".fade-in-sec-eight-desktop .item",
            start: "top 85%",
            toggleActions: "play none none reverse",
        },
    });

    const demoDesktopItemCountUp = document.querySelectorAll(".fade-in-sec-eight-desktop .item div")
    demoDesktopItemCountUp.forEach((item, idx) => {
        const targetValue = parseInt(item.textContent.replace(/\D/g, ""), 10)
        item.textContent = "0"

        gsap.fromTo(
            item,
            { innerHTML: 0, delay: (idx + 1) * 0.3 },
            {
                innerHTML: targetValue,
                duration: 2,
                ease: "power2.out",
                snap: { innerHTML: 1 },
                scrollTrigger: {
                    trigger: ".fade-in-sec-eight-desktop .item",
                    start: "top 85%",
                    toggleActions: "play none none reverse",
                },
            }
        );
    })
};
