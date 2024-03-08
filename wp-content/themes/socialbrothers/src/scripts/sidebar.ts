const sidebar = (menu: HTMLElement) => {
    const dropdowns = menu.querySelectorAll('.sidebar .title');
    const filters = menu.querySelectorAll('.sidebar .facetwp-facet');

    if (dropdowns.length) {
        dropdowns?.forEach((dropdown) => {
            const dropdownID = dropdown.getAttribute('id');

            dropdown.addEventListener('click', () => {
                filters?.forEach((filter) => {
                    const filterName = filter.getAttribute('data-name');   
               
                    if (filterName === dropdownID) {
                        filter.classList.toggle('hidden');
                        dropdown.classList.toggle('open');
                    }
                });
            });
        });
    }
}

export default sidebar;