// SINGLE PROYEK - Gallery View

const gallery_show = document.querySelector('.gallery-show img');
const pict1 = document.querySelector('.single-gallery .pict-1 img');
const pict2 = document.querySelector('.single-gallery .pict-2 img');
const pict3 = document.querySelector('.single-gallery .pict-3 img');
const pict4 = document.querySelector('.single-gallery .pict-4 img');

let pict_pos = 1;

let gallery_interval = setInterval(gallery_slide, 5000);

function gallery_slide (){
  switch (pict_pos){
    case 1:
      gallery_show.setAttribute('src', pict1.getAttribute('src'));
      pict_pos += 1;
      console.log("case 1: " + pict_pos);

      pict1.classList.add('pict-active');
      pict2.classList.remove('pict-active');
      pict3.classList.remove('pict-active');
      pict4.classList.remove('pict-active');
      break;
    case 2:
      gallery_show.setAttribute('src', pict2.getAttribute('src'));
      pict_pos += 1;
      console.log("case 2: " + pict_pos);

      pict1.classList.remove('pict-active');
      pict2.classList.add('pict-active');
      pict3.classList.remove('pict-active');
      pict4.classList.remove('pict-active');
      break;
    case 3:
      gallery_show.setAttribute('src', pict3.getAttribute('src'));
      pict_pos += 1;
      console.log("case 3: " + pict_pos);

      pict1.classList.remove('pict-active');
      pict2.classList.remove('pict-active');
      pict3.classList.add('pict-active');
      pict4.classList.remove('pict-active');
      break;
    case 4:
      gallery_show.setAttribute('src', pict4.getAttribute('src'));
      pict_pos = 1;
      console.log("case 4: " + pict_pos);

      pict1.classList.remove('pict-active');
      pict2.classList.remove('pict-active');
      pict3.classList.remove('pict-active');
      pict4.classList.add('pict-active');
      break;
    default:  
      gallery_show.setAttribute('src', pict1.getAttribute('src'));
      break;
  }

}

function changePict1(){
  gallery_show.setAttribute('src',pict1.getAttribute('src'));
  clearInterval(gallery_interval);
  gallery_interval = setInterval(gallery_slide, 5000);
  pict_pos = 2;

  pict1.classList.add('pict-active');
  pict2.classList.remove('pict-active');
  pict3.classList.remove('pict-active');
  pict4.classList.remove('pict-active');

}

function changePict2(){
  gallery_show.setAttribute('src',pict2.getAttribute('src'));
  clearInterval(gallery_interval);
  gallery_interval = setInterval(gallery_slide, 5000);
  pict_pos = 3;

  pict1.classList.remove('pict-active');
  pict2.classList.add('pict-active');
  pict3.classList.remove('pict-active');
  pict4.classList.remove('pict-active');
}

function changePict3(){
  gallery_show.setAttribute('src',pict3.getAttribute('src'));
  clearInterval(gallery_interval);
  gallery_interval = setInterval(gallery_slide, 5000);
  pict_pos = 4;

  pict1.classList.remove('pict-active');
  pict2.classList.remove('pict-active');
  pict3.classList.add('pict-active');
  pict4.classList.remove('pict-active');

}

function changePict4(){
  gallery_show.setAttribute('src',pict4.getAttribute('src'));
  clearInterval(gallery_interval);
  gallery_interval = setInterval(gallery_slide, 5000);
  pict_pos = 1;

  pict1.classList.remove('pict-active');
  pict2.classList.remove('pict-active');
  pict3.classList.remove('pict-active');
  pict4.classList.add('pict-active');

}