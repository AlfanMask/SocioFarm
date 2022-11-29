// JQuery Functions
document.addEventListener("DOMContentLoaded", function(event) { 

$('.form-profile form .img-file').change(function(){
  const alertPP = document.querySelector('.form-profile form .alert-pp');
  alertPP.style.display = "block";
});


});


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


// SIMULASI
const harga = document.querySelector('#harga');
const elm_lembar = document.querySelector('#lembar');
const elm_return = document.querySelector('#return');
const elm_modal = document.querySelector('#modal');
const elm_profit = document.querySelector('#profit');
const elm_pendapatan = document.querySelector('#pendapatan');

// console.log('harga:' + harga.innerHTML.replace('.',''));

function updateProfit(){
  let modal = lembar.value*harga.innerHTML.replace(/\./g,'');
  let profit = (40/100)*((lembar.value*elm_return.value.replace('.','')*100)-modal);
  let pendapatan = modal + profit;

  modal = numberWithCommas(modal);
  profit = numberWithCommas(profit);
  pendapatan = numberWithCommas(pendapatan);

  elm_modal.setAttribute('value','Rp. ' + modal);
  elm_profit.setAttribute('value','Rp. ' + profit);
  elm_pendapatan.setAttribute('value', 'Rp. ' + pendapatan);

  // elm_modal.innerHTML = 'Rp. ' + modal;
  // elm_profit.innerHTML = 'Rp. ' + profit;
  // elm_pendapatan.innerHTML = 'Rp. ' + pendapatan;

  // console.log('lembar: ' + elm_lembar.value);
  // console.log('harga1: ' + harga.innerHTML.replace(/\./g,''));
  // console.log('harga jual: ' + elm_return.value);
  // console.log('modal: ' + modal);
  // console.log('profit: ' + profit);
  // console.log('pendapatan: ' + pendapatan);

}

function numberWithCommas(x) {
  var parts = x.toString().split(".");
  parts[0]=parts[0].replace(/\B(?=(\d{3})+(?!\d))/g,".");
  return parts.join(",");
}