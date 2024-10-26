<?php
function allwishlist(){
    return App\Models\Wishlist::where('user_id', auth()->id())->get();
}
?>
