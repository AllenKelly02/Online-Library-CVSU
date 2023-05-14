function imagePreview (){

    return {

        imageSrc : null,
        imageUpload : null,

        uploadImage (e) {

            const { files } = e.target;

            const reader = new FileReader();

            reader.onload = (e) =>{
               this.imageSrc =  e.target.result
            }

            reader.readAsDataURL(files[0]);
        },
        removeImage () {

            this.imageSrc = null

        }
    }

}
