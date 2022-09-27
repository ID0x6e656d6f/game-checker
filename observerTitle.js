/*
const title = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const title = entry.target.querySelector('.titlee');
    const sas = entry.target.querySelector('.sas');

    if (entry.isIntersecting) {
      title.classList.add('title-animation');
      sas.classList.add('pop-animation');
	  return
    }
    title.classList.remove('title-animation');
    sas.classList.remove('pop-animation');
  });
});
title.observe(document.querySelector('.page_part'));
*/
//serve per l'animazione del titolo. Ma sposta degli elementi quindi per ora non lo uso