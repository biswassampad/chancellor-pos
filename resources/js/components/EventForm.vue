<template>
    <div class="container">
       <div class="form-group">
            <label for="halltype">Event Purpose</label>
            <input type="text" class="form-control" v-model="purpose" placeholder="Enter Event Purpose">
        </div>
        <div class="form-group">
            <label for="halltype">Veg/Non Veg</label>
            <select class="form-control" name="vnv">
                <option value="1">Veg</option>
                <option value="2">Non Veg</option>
            </select>
        </div>
        <div class="form-group">
            <label for="halltype">Price per plate</label>
            <input type="text" class="form-control" name="price" placeholder="Price per plate">
        </div>
        <div class="form-group">
            <label for="halltype">About the package</label>
            <textarea  class="form-control" name="about" placeholder="Package Description"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</template>

<script>
export default {

data(){
    return{
        halls:[],
        packages:[]
    }
},
mounted(){
    axios.get('/eventhalls',{})
    .then((response)=>{
        console.log(response.data);
    }).catch((error)=>{
        console.log(error);
    });
}
}
</script>

<style>

</style>
