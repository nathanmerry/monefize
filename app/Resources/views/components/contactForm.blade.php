<div x-data="ContactForm()" class="bg-white px-6 lg:px-12 py-6 lg:py-14 rounded-xl shadow-lg">
  <div class="mb-5 text-primary text-2xl font-bold font-header tracking-widest">CONTACT FORM</div>
  <div class="mb-5 text-dark text-lg">Questions, queries, or just want to drop us a message and say hello? Below you can find all the details you need to contact the right person on our team.</div>
  <form class="text-dark">
    <div class="grid grid-cols-2 gap-x-2 mb-5">
      <div class="flex flex-col lg:mr-3">
        <label for="firstName" class="mb-3">First Name</label>
        <input x-model="fields.firstName" type="text" name="firstName" class="p-2 rounded-sm border border-gray-300">
      </div>
      <div class="flex flex-col lg:ml-3">
        <label for="lname" class="mb-3">Last Name</label>
        <input x-model="fields.lastName" type="text" name="lname" class="p-2 rounded-sm border border-gray-300">
      </div>
    </div>
    <label for="email" class="block mb-3">Email</label>
    <input x-model="fields.email" type="text" name="email" class="w-full mb-5 p-2 rounded-sm border border-gray-300">
    <label for="phone" class="block mb-3">Phone</label>
    <input x-model="fields.phone" type="text" name="phone" class="w-full mb-5 p-2 rounded-sm border border-gray-300">
    <label for="company" class="block mb-3">Company</label>
    <input x-model="fields.company" type="text" name="company" class="w-full mb-5 p-2 rounded-sm border border-gray-300">
    <label for="message" class="block mb-3">Message</label>
    <textarea x-model="fields.message" class="w-full h-32 mb-5 p-2 rounded-sm border border-gray-300 resize-none"></textarea>

    <button class="px-6 py-3 bg-green-400 text-white rounded text-lg font-semibold" x-on:click="onClickSubmitForm(event)">SEND MESSAGE</button>
  </form>
</div>
