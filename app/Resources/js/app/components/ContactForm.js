window.ContactForm = function() {
  return {
    fields: {
      firstName: '',
      lastName: '',
      email: '',
      phone: '',
      company: '',
      message: ''
    },

    onClickSubmitForm(event) {
      event.preventDefault()
      
    }
  };
};
  