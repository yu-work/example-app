<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <input class="col-2" type="button" name="search-submit" value="search">
                <input class="col" type="text" name="search-text">
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in products">
                        <td>{{ item.product_id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.price?.price == null ? '-' : item.price?.price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <li v-for="n in evenNumbers">{{ n }}</li>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'

const props = defineProps([
    'list',
])
const products = ref(props.list);
const filteredProducts = computed(() => {
    return products.name.filter((n) => )
})

const numbers = ref([1, 2, 3, 4, 5])
const evenNumbers = computed(() => {
  return numbers.value.filter((n) => n % 2 === 0)
})

// ライフサイクルフック
onMounted(() => {
})
</script>
