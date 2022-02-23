// landing page js
(function() {
    "use strict";
  
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
  
    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
      if (all) {
        select(el, all).forEach(e => e.addEventListener(type, listener))
      } else {
        select(el, all).addEventListener(type, listener)
      }
    }
  
    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
    }
  
    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
      let position = window.scrollY + 200
      navbarlinks.forEach(navbarlink => {
        if (!navbarlink.hash) return
        let section = select(navbarlink.hash)
        if (!section) return
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          navbarlink.classList.add('active')
        } else {
          navbarlink.classList.remove('active')
        }
      })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)
  
  
  
    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    if (selectHeader) {
      const headerScrolled = () => {
        if (window.scrollY > 100) {
          selectHeader.classList.add('header-scrolled')
        } else {
          selectHeader.classList.remove('header-scrolled')
        }
      }
      window.addEventListener('load', headerScrolled)
      onscroll(document, headerScrolled)
    }
  
    /**
     * Animation on scroll
     */
    function aos_init() {
      AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false
      });
    }
    window.addEventListener('load', () => {
      aos_init();
    });
  
  })();

    // swiper

    const swiper = new Swiper(".mySwiper", {
      effect: "cards",
      grabCursor: true,
    });


// chart js configration

const labels = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aut","Sep","Oct","Nov","Dec"];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Tasks' ,
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 6, 5, 2, 10, 18, 15 , 8, 14 , 13 , 15  , 16 ],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };



  const labels2 = ["Photo" , "Sheets" , "Documents"];

  const data2 = {
    labels: labels2,
    datasets: [
      {
        label: 'Data',
        data: [10, 108, 206],
        backgroundColor: 'rgb(250, 199, 132)',
        borderColor: 'rgb(250, 199, 132)',
        borderWidth: 2,
        borderRadius: 8,
        borderSkipped: false,
      }
    ]
  };

  const config2 = {
    type: 'bar',
    data: data2,
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        },
        title: {
          display: true,
          text: 'Files'
        }
      }
    },
  };

  
  // const myChart = new Chart(
  //   [ document.getElementById('myChart'), config ,
  //    document.getElementById('myChart2'),config2]
  // );
  
  // const myChart2 = new Chart(
  //   document.getElementById('myChart2'),
  //   config2
  // );


  let notstarted = document.getElementById("not-started");
  let pause = document.getElementById("paused");
  let done = document.getElementById("done");
  let progress = document.getElementById("progress");
  
 
  function addActive (param , others) {
    param.addEventListener("click" , (e) => {
      e.preventDefault();
      e.target.classList.toggle("active");
      e.target.setAttribute("name" , "active");
      console.log(e.target)

      others.forEach(other => {
          other.classList.remove("active");
          other.removeAttribute('name');
      })
    })

  }


  addActive(notstarted , [pause , done , progress])
  addActive(pause , [notstarted , done , progress])
  addActive(done , [notstarted , pause , progress])
  addActive(progress , [notstarted , pause , done])