<template>
  <el-col class="content">
    <el-row>
      <el-col :span="24">
        <el-form ref="form" :inline="true">
          <el-form-item label="显示">
            <el-select v-model="value8" filterable placeholder="请选择">
              <el-option
                      v-for="item in options"
                      :key="item.value"
                      :label="item.label"
                      :value="item.value">
              </el-option>
            </el-select>
          </el-form-item>
          <el-form-item label="的">
            <el-select v-model="value8" filterable placeholder="请选择">
              <el-option
                      v-for="item in options"
                      :key="item.value"
                      :label="item.label"
                      :value="item.value">
              </el-option>
            </el-select>
          </el-form-item>
        </el-form>
      </el-col>
    </el-row>
    <el-row>
      <el-col :span="24">
        <span class="demonstration">范围</span>
        <el-date-picker
                v-model="value9"
                type="daterange"
                align="right"
                placeholder="选择日期范围"
                :picker-options="pickerOptions2">
        </el-date-picker>
      </el-col>
      <el-col :span="24">
        <ve-line :data="chartData" :settings="chartSettings"></ve-line>
      </el-col>
    </el-row>
    <el-row>
      <el-col>
        <el-table
                :data="tableData"
                border
                style="width: 100%">
          <el-table-column
                  prop="date"
                  label="日期"
                  width="180">
          </el-table-column>
          <el-table-column
                  prop="name"
                  label="姓名"
                  width="180">
          </el-table-column>
          <el-table-column
                  prop="address"
                  label="地址">
          </el-table-column>
        </el-table>
      </el-col>
    </el-row>
  </el-col>
</template>

<script>
  export default {
    data(){
      return {
        options: [
          {
            value: '选项1',
            label: '黄金糕'
          }, {
            value: '选项2',
            label: '双皮奶'
          }, {
            value: '选项3',
            label: '蚵仔煎'
          }, {
            value: '选项4',
            label: '龙须面'
          }, {
            value: '选项5',
            label: '北京烤鸭'
          } ],
        value8: '',
        tableData: [
          {
            date: '2016-05-02',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1518 弄'
          }, {
            date: '2016-05-04',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1517 弄'
          }, {
            date: '2016-05-01',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1519 弄'
          }, {
            date: '2016-05-03',
            name: '王小虎',
            address: '上海市普陀区金沙江路 1516 弄'
          } ],
        pickerOptions2: {
          shortcuts: [ {
            text: '最近一周',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [ start, end ]);
            }
          }, {
            text: '最近一个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
              picker.$emit('pick', [ start, end ]);
            }
          }, {
            text: '最近三个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
              picker.$emit('pick', [ start, end ]);
            }
          } ]
        },
        value9: '',
      }
    },
    created: function () {
      this.chartData = {
        columns: [ '日期', '销售额-1季度', '销售额-2季度', '占比', '其他' ],
        rows: [
          { '日期': '1月1日', '销售额-1季度': 1523, '销售额-2季度': 1523, '占比': 0.12, '其他': 100 },
          { '日期': '1月2日', '销售额-1季度': 1223, '销售额-2季度': 1523, '占比': 0.345, '其他': 100 },
          { '日期': '1月3日', '销售额-1季度': 2123, '销售额-2季度': 1523, '占比': 0.7, '其他': 100 },
          { '日期': '1月4日', '销售额-1季度': 4123, '销售额-2季度': 1523, '占比': 0.31, '其他': 100 },
          { '日期': '1月5日', '销售额-1季度': 3123, '销售额-2季度': 1523, '占比': 0.12, '其他': 100 },
          { '日期': '1月6日', '销售额-1季度': 7123, '销售额-2季度': 1523, '占比': 0.65, '其他': 100 }
        ]
      };
      this.chartSettings = {
        dimension: [ '日期' ],
        metrics: [ '销售额-1季度', '销售额-2季度', '占比' ],
        axisSite: {
          right: [ '占比' ]
        },
        yAxisType: [ 'KMB', 'percent' ],
        yAxisName: [ '销售额', '占比' ],
        area: false,
        stack: {
          '销售额': [ '销售额-1季度', '销售额-2季度' ]
        }
      };
    }
  }
</script>

<style lang="scss" scpoed>
  .content {
    padding: 15px 15px 15px 245px;
  }
</style>