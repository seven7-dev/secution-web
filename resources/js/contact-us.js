$(function () {
  $(document).on('submit', '.contactus-form', (e) => {
    e.preventDefault();
    submitForm(e.currentTarget);
  });

  function submitForm(form) {
    const url = $(form).attr('action');
    const loader = $(form).siblings('#ajaxloader');
    const statusMessage = $(form).prevAll('#formmessage');
    const successMessage = statusMessage.find('.success');
    const errorMessage = statusMessage.find('.error');

    $(form).hide();
    successMessage.add(errorMessage).hide();
    loader.show();

    const formData = new FormData(form);
    const data = Object.fromEntries(formData);

    axios.post(url, data)
      .then(response => {
        loader.hide();
        successMessage.show();
      })
      .catch(error => {
        loader.hide();
        $(form).show();
        errorMessage.show();
      })
      .finally(() => loader.hide());
  }
});
