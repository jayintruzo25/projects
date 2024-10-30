const el = document.getElementById('date');

const dateString = new Date().toDateString();

el.textContent = dateString; // passing the date to html element