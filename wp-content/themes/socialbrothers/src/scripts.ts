const scriptsInit = () => {
  const sliders = document.querySelectorAll('.slider');
  if (sliders.length) {
    sliders?.forEach((slider) =>
      import('./scripts/swiper').then((module) =>
        module.default(slider as HTMLElement)
      )
    );
  }

  const formsComplex = document.querySelectorAll('.form-complex');
  if (formsComplex.length) {
    formsComplex?.forEach((formComplex) =>
      import('./scripts/formComplex').then((module) =>
        module.default(formComplex as HTMLElement)
      )
    );
  }

  const menuMains = document.querySelectorAll(
    '.menu-main:not(.menu-main--hover)'
  );
  if (menuMains.length) {
    menuMains?.forEach((menuMain) =>
      import('./scripts/mainMenu').then((module) =>
        module.default(menuMain as HTMLElement)
      )
    );
  }

  const sidebar = document.querySelector('.sidebar');
  if (sidebar) {
    import('./scripts/sidebar').then((module) =>
      module.default(sidebar as HTMLElement)
    );
  }

  const menu = document.querySelector('.menu_container');
  const menuToggle = document.querySelector('.menu_toggle');

  if (menu && menuToggle) {
    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
      document.body.classList.toggle('overflow-hidden');
    });
  }

  const sidebarMenu = document.querySelector('.sidebar');
  const sidebarToggle = document.querySelector('#sidebar-toggle');

  if (sidebarMenu && sidebarToggle) {
    sidebarToggle.addEventListener('click', () => {
      setTimeout(() => {
        sidebarMenu.classList.toggle('show');
      }, 100);
    });

    window.addEventListener('click', (e) => {
      if (
        e.target !== sidebarMenu &&
        sidebarMenu.classList.contains('show') &&
        e.target !== sidebarToggle
      ) {
        sidebarMenu.classList.remove('show');
      }
    });
  }
};

export default scriptsInit;
