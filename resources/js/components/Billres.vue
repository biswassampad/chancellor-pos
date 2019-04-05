<template>
    <div class="row content-justify-center">
            <div class="invoice-box">
                    <table cellpadding="0" cellspacing="0">
                        <tr class="top">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td class="title">
                                          <h1>KOT INVOICE</h1>
                                        </td>
                                        
                                        <td>
                                            <b>Table No #:{{customer[0].tableno}}</b><br>
                                            Order No #: {{customer[0].orderno}}<br>
                                            Created: {{customer[0].created_at}}<br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr class="information">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td>
                                            For:<br>
                                            <b>Chancellor Grand.</b><br>
                                            <br>
                                        </td>
                                        
                                        <td>
                                            <b>{{customer[0].name}}</b><br>
                                            +91-{{customer[0].mobileno}}<br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <tr class="heading">
                            <td>
                                Item
                            </td>
                            <td>
                                Qnty.
                            </td>
                            <td>
                                Price
                            </td>
                        </tr>
                       
                        <tr class="item" v-for="item in itemlist" :key="item.id">
                            <td>
                                {{item.itemname}}
                            </td>
                            <td>
                                    {{item.itemqnty}}
                                </td>
                            <td>
                                   {{item.amount}}
                            </td>
                        </tr>
                     
                        <tr class="heading">
                                <td>
                                    Total
                                </td>
                                <td>
                                   
                                </td>
                                <td>
                                   {{sum}}
                                
                                </td>
                            </tr>
                            <tr class="item last">
                                    <td>
                                        CGST(2.5%)
                                    </td>
                                    <td>
                                    
                                </td>
                                    <td>
                                       {{cgst}}
                                    </td>
                                </tr>
                                <tr class="item last">
                                        <td>
                                            SGST(2.5%)
                                        </td>
                                        <td>
                                    
                                        </td>
                                        <td>
                                            {{sgst}}
                                        </td>
                                    </tr>
                                    <tr class="heading">
                                            <td>
                                                Grand Total
                                            </td>
                                            <td>
                                    
                                                </td>
                                            <td>
                                                {{total}}
                                            </td>
                                        </tr>
                                    </table>
                                    <a href="" @click.prevent="printme" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                                    </div>
    
                <un-done></un-done>
            </div>
</template>

<script>
export default {
    data(){
        return{
            customer:[],
            itemlist:[],
            pricelist:[],
    
        }
    }
    ,mounted:function(){
        var currentUrl = window.location.pathname;
        var orderno = currentUrl.split("/")[2];
            axios.get('/api/getcustsomerforkot/'+orderno,{})
            .then((response)=>{
                this.customer = response.data;
            }).catch((error)=>{

            });
            axios.get('/api/orderitems/'+orderno,{})
            .then((response)=>{
                
                this.itemlist = response.data;
            }).catch((error)=>{

            });
            axios.get('/api/getpricelistfororder/'+orderno,{

            }).then((response)=>{
                this.pricelist = response.data;
               
               
            }).catch((error)=>{

            });
           
    },
    computed:{
            sum(){
               return this.pricelist.reduce((acc, item) => parseInt(acc,10) + parseInt(item.amount,10), 0);
            },
            cgst(){
                return  this.sum * 25/1000; 
            },
            sgst(){
                return this.sum * 25/1000;
            },
            total(){
                return this.sum + this.cgst + this.sgst;
            }   
        
      
    }
           
}
</script>

<style>

</style>
