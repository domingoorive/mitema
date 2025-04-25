    console.log ("hola mundo")
    
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.navegacion');

    toggle.addEventListener('click', () => {
        nav.classList.toggle('activo');
    });

