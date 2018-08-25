import $ from 'jquery';

class Like {
  constructor() {
    this.events();
  }

  events() {
    $(".like-box").on("click", this.ourClickDispater.bind(this));
  }

  // methods
  ourClickDispatcher(e) {
    let currentLikeBox = $(e.target).closest('.like-box');
    if (currentLikeBox.data('exists') == 'yes') {
      this.deleteLike();
    } else {
      this.createLike();
    }
  }

  createLike() {
    
  }

  deleteLike() {

  }
}

export default Like;