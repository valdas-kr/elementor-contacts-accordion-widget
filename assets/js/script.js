document.querySelectorAll('.first-row').forEach(firstRow => {
  firstRow.addEventListener('click', () => {
    const secondRow = firstRow.nextElementSibling;
    secondRow.classList.toggle('active');
  });
});