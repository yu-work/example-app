<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <button @click="count++">
                        Count is: {{ count }}
                    </button>
                    <h1>{{ message.split('').reverse().join('') }}</h1>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

// リアクティブな状態
const count = ref(0)
const message = ref('Hello World')

console.log(message.value) // "Hello World!"
message.value = 'Changed'

// 状態を変更し、更新をトリガーする関数。
function increment() {
  count.value++
}

// ライフサイクルフック
onMounted(() => {
  console.log(`The initial count is ${count.value}.`)
})
</script>
