
window.addEventListener('load', () => {
    document.getElementById('searchmodels').oninput = function () {
 
        let val = this.value.trim();
        
        let labels = document.querySelectorAll('.labels-l');

        if (val !== '') {
            labels.forEach((item) => {
                if (item.innerText.search(val) == -1) {
                    item.classList.add('hide');
                } else {
                    item.classList.remove('hide');
                }
            });
        } else {
            labels.forEach((item) => {
                item.classList.remove('hide');
            });
        }
    }

    document.getElementById('searchmodelsDva').oninput = function () {
 
        let val = this.value.trim();
        
        let labels = document.querySelectorAll('.labels-lDva');

        if (val !== '') {
            labels.forEach((item) => {
                if (item.innerText.search(val) == -1) {
                    item.classList.add('hide');
                } else {
                    item.classList.remove('hide');
                }
            });
        } else {
            labels.forEach((item) => {
                item.classList.remove('hide');
            });
        }
    }

    document.getElementById('searchmodelsTree').oninput = function () {
 
        let val = this.value.trim();
        
        let labels = document.querySelectorAll('.labels-lTree');

        if (val !== '') {
            labels.forEach((item) => {
                if (item.innerText.search(val) == -1) {
                    item.classList.add('hide');
                } else {
                    item.classList.remove('hide');
                }
            });
        } else {
            labels.forEach((item) => {
                item.classList.remove('hide');
            });
        }
    }

    document.getElementById('searchmodelsChit').oninput = function () {
 
        let val = this.value.trim();
        
        let labels = document.querySelectorAll('.labels-lChit');

        if (val !== '') {
            labels.forEach((item) => {
                if (item.innerText.search(val) == -1) {
                    item.classList.add('hide');
                } else {
                    item.classList.remove('hide');
                }
            });
        } else {
            labels.forEach((item) => {
                item.classList.remove('hide');
            });
        }
    }

    document.getElementById('searchmodelsPyat').oninput = function () {
 
        let val = this.value.trim();
        
        let labels = document.querySelectorAll('.labels-lPyat');

        if (val !== '') {
            labels.forEach((item) => {
                if (item.innerText.search(val) == -1) {
                    item.classList.add('hide');
                } else {
                    item.classList.remove('hide');
                }
            });
        } else {
            labels.forEach((item) => {
                item.classList.remove('hide');
            });
        }
    }

    document.getElementById('searchmodelsWest').oninput = function () {
 
        let val = this.value.trim();
        
        let labels = document.querySelectorAll('.labels-lWest');

        if (val !== '') {
            labels.forEach((item) => {
                if (item.innerText.search(val) == -1) {
                    item.classList.add('hide');
                } else {
                    item.classList.remove('hide');
                }
            });
        } else {
            labels.forEach((item) => {
                item.classList.remove('hide');
            });
        }
    }

    document.getElementById('searchmodelsSem').oninput = function () {
 
        let val = this.value.trim();
        
        let labels = document.querySelectorAll('.labels-lSem');

        if (val !== '') {
            labels.forEach((item) => {
                if (item.innerText.search(val) == -1) {
                    item.classList.add('hide');
                } else {
                    item.classList.remove('hide');
                }
            });
        } else {
            labels.forEach((item) => {
                item.classList.remove('hide');
            });
        }
    }

    document.getElementById('searchmodelsVosem').oninput = function () {
 
        let val = this.value.trim();
        
        let labels = document.querySelectorAll('.labels-lVosem');

        if (val !== '') {
            labels.forEach((item) => {
                if (item.innerText.search(val) == -1) {
                    item.classList.add('hide');
                } else {
                    item.classList.remove('hide');
                }
            });
        } else {
            labels.forEach((item) => {
                item.classList.remove('hide');
            });
        }
    }

    $('#arrow-my1').on('click', function() {
        $(".filter1").toggleClass('hiden');
    });
    
    $('#arrow-my2').on('click', function() {
        $(".filter2").toggleClass('hiden');
    });
    
    $('#arrow-my3').on('click', function() {
        $(".filter3").toggleClass('hiden');
    });
    
    $('#arrow-my4').on('click', function() {
        $(".filter4").toggleClass('hiden');
    });
    
    $('#arrow-my5').on('click', function() {
        $(".filter5").toggleClass('hiden');
    });
    
    $('#arrow-my6').on('click', function() {
        $(".filter6").toggleClass('hiden');
    });
    
    $('#arrow-my7').on('click', function() {
        $(".filter7").toggleClass('hiden');
    });
    
    $('#arrow-my8').on('click', function() {
        $(".filter8").toggleClass('hiden');
    });


    const facetFilterRar1 = document.querySelectorAll('.facet-filter-bodyRaz');
    const btnNore1 = document.querySelector('.btn-nore-f');
    for(let i = 0; i < facetFilterRar1.length; i++) {
        if (i > 1) {
            facetFilterRar1[i].classList.add('hiden');
            btnNore1.classList.remove('hiden');
        } 
    }


    if (btnNore1 && !btnNore1.classList.contains('hiden')) {
        btnNore1.addEventListener('click', () => {
            for(let i = 0; i < facetFilterRar1.length; i++) {
                if (facetFilterRar1[i].classList.contains('hiden')) {
                    facetFilterRar1[i].classList.remove('hiden');
                    btnNore1.classList.add('hidden');
                }
            }
        });
    }

    const facetFilterRar2 = document.querySelectorAll('.facet-filter-bodyDva');
    const btnNore2 = document.querySelector('.btn-nore-t');
    for(let i = 0; i < facetFilterRar2.length; i++) {
        if (i > 1) {
            facetFilterRar2[i].classList.add('hiden');
            btnNore2.classList.remove('hiden');
        } 
    }


    if (btnNore2 && !btnNore2.classList.contains('hiden')) {
        btnNore2.addEventListener('click', () => {
            for(let i = 0; i < facetFilterRar2.length; i++) {
                if (facetFilterRar2[i].classList.contains('hiden')) {
                    facetFilterRar2[i].classList.remove('hiden');
                    btnNore2.classList.add('hidden');
                }
            }
        });
    }

    const facetFilterRar3 = document.querySelectorAll('.facet-filter-bodyTree');
    const btnNore3 = document.querySelector('.btn-nore-tr');
    for(let i = 0; i < facetFilterRar3.length; i++) {
        if (i >1) {
            facetFilterRar3[i].classList.add('hiden');
            btnNore3.classList.remove('hiden');
        } 
    }


    if (btnNore3 && !btnNore3.classList.contains('hiden')) {
        btnNore3.addEventListener('click', () => {
            for(let i = 0; i < facetFilterRar3.length; i++) {
                if (facetFilterRar3[i].classList.contains('hiden')) {
                    facetFilterRar3[i].classList.remove('hiden');
                    btnNore3.classList.add('hidden');
                }
            }
        });
    }

    const facetFilterRar4 = document.querySelectorAll('.facet-filter-bodyChit');
    const btnNore4 = document.querySelector('.btn-nore-fo');
    for(let i = 0; i < facetFilterRar4.length; i++) {
        if (i > 1) {
            facetFilterRar4[i].classList.add('hiden');
            btnNore4.classList.remove('hiden');
        } 
    }


    if (btnNore4 && !btnNore4.classList.contains('hiden')) {
        btnNore4.addEventListener('click', () => {
            for(let i = 0; i < facetFilterRar4.length; i++) {
                if (facetFilterRar4[i].classList.contains('hiden')) {
                    facetFilterRar4[i].classList.remove('hiden');
                    btnNore4.classList.add('hidden');
                }
            }
        });
    }

    const facetFilterRar5 = document.querySelectorAll('.facet-filter-bodyFiv');
    const btnNore5 = document.querySelector('.btn-nore-fiv');
    for(let i = 0; i < facetFilterRar5.length; i++) {
        if (i > 1) {
            facetFilterRar5[i].classList.add('hiden');
            btnNore5.classList.remove('hiden');
        } 
    }


    if (btnNore5 && !btnNore5.classList.contains('hiden')) {
        btnNore5.addEventListener('click', () => {
            for(let i = 0; i < facetFilterRar5.length; i++) {
                if (facetFilterRar5[i].classList.contains('hiden')) {
                    facetFilterRar5[i].classList.remove('hiden');
                    btnNore5.classList.add('hidden');
                }
            }
        });
    }

    const facetFilterRar6 = document.querySelectorAll('.facet-filter-bodySix');
    const btnNore6 = document.querySelector('.btn-nore-s');
    for(let i = 0; i < facetFilterRar6.length; i++) {
        if (i > 1) {
            facetFilterRar6[i].classList.add('hiden');
            btnNore6.classList.remove('hiden');
        } 
    }


    if (btnNore6 && !btnNore6.classList.contains('hiden')) {
        btnNore6.addEventListener('click', () => {
            for(let i = 0; i < facetFilterRar6.length; i++) {
                if (facetFilterRar6[i].classList.contains('hiden')) {
                    facetFilterRar6[i].classList.remove('hiden');
                    btnNore6.classList.add('hidden');
                }
            }
        });
    }

    const facetFilterRar7 = document.querySelectorAll('.facet-filter-bodySv');
    const btnNore7 = document.querySelector('.btn-nore-sv');
    for(let i = 0; i < facetFilterRar7.length; i++) {
        if (i > 1) {
            facetFilterRar7[i].classList.add('hiden');
            btnNore7.classList.remove('hiden');
        } 
    }


    if (btnNore7 && !btnNore7.classList.contains('hiden')) {
        btnNore7.addEventListener('click', () => {
            for(let i = 0; i < facetFilterRar7.length; i++) {
                if (facetFilterRar7[i].classList.contains('hiden')) {
                    facetFilterRar7[i].classList.remove('hiden');
                    btnNore7.classList.add('hidden');
                }
            }
        });
    }

    const facetFilterRar8 = document.querySelectorAll('.facet-filter-bodyEg');
    const btnNore8 = document.querySelector('.btn-nore-eg');
    for(let i = 0; i < facetFilterRar8.length; i++) {
        if (i > 1) {
            facetFilterRar8[i].classList.add('hiden');
            btnNore8.classList.remove('hiden');
        } 
    }


    if (btnNore8 && !btnNore8.classList.contains('hiden')) {
        btnNore8.addEventListener('click', () => {
            for(let i = 0; i < facetFilterRar8.length; i++) {
                if (facetFilterRar8[i].classList.contains('hiden')) {
                    facetFilterRar8[i].classList.remove('hiden');
                    btnNore8.classList.add('hidden');
                }
            }
        });
    }

});



