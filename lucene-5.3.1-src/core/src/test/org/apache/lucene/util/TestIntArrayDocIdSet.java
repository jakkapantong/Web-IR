package org.apache.lucene.util;

/*
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

import java.io.IOException;
import java.util.BitSet;

import org.apache.lucene.search.DocIdSetIterator;

public class TestIntArrayDocIdSet extends BaseDocIdSetTestCase<IntArrayDocIdSet> {

  @Override
  public IntArrayDocIdSet copyOf(BitSet bs, int length) throws IOException {
    int[] docs = new int[0];
    int l = 0;
    for (int i = bs.nextSetBit(0); i != -1; i = bs.nextSetBit(i + 1)) {
      docs = ArrayUtil.grow(docs, length + 1);
      docs[l++] = i;
    }
    docs = ArrayUtil.grow(docs, length + 1);
    docs[l] = DocIdSetIterator.NO_MORE_DOCS;
    return new IntArrayDocIdSet(docs, l);
  }
  
}
