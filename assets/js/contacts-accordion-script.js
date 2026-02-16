document.querySelectorAll('.first-row').forEach(firstRow => {
  firstRow.addEventListener('click', () => {
    const secondRow = firstRow.nextElementSibling;
    document.querySelectorAll('#second-row.active').forEach(openRow => {
      if (openRow != secondRow) {
        openRow.classList.remove('active');
      }
    })
    secondRow.classList.toggle('active');
  });
});